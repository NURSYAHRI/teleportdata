<?php

namespace App\Http\Controllers;

use App\Models\Bts;
use App\Models\Customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class CustomerController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
           
            $data = Customer::where('id_customer','LIKE','%'.$request->search.'%')
            ->orwhere('nama','LIKE','%'.$request->search.'%')
            ->orwhere('ip','LIKE','%'.$request->search.'%')
            ->orwhere('status','LIKE','%'.$request->search.'%')
            ->orwhere('category','LIKE','%'.$request->search.'%')
            ->orwhere('pic','LIKE','%'.$request->search.'%')
            
            ->paginate(5);
            Session::put('halaman_url',request()->fullUrl());
        }
        else{
            $data = Customer::paginate(5);
            Session::put('halaman_url',request()->fullUrl());   
        }

        return view('datacustomer',compact('data'));
    }

    public function tambahcustomer(){
        $databts = Bts::all();
        return view('tambahdata',compact('databts'));
    }

    public function insertdatacs(Request $request){
        Customer::create($request->all());
        return redirect()->route('customer')-> with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandatacs($id){

        $databts = Bts::all();
        $data = Customer::find($id);
        return view('editdatacs',compact('data','databts'));
    }

    public function updatedatacs(Request $request,$id){
    
        $data = Customer::find($id);
        $data->update($request->all());

        if(session('halaman_url')){

            return redirect(session('halaman_url'))-> with('success','Data Berhasil Di Update');
        }
        return redirect()->route('customer')-> with('success','Data Berhasil Di Update');
    
    }

    public function delete($id){
        $data = Customer::find($id);
        $data -> delete();
        return redirect()->route('customer')-> with('success','Data Berhasil Di Hapus');
    }

    public function exportpdf(){
        $data = Customer::all();

        view()->share('data',$data);
        $pdf = Pdf::loadView('datacustomer-pdf')->setPaper('legal', 'landscape');
        return $pdf->download('datacustomer.pdf');


    }

}

