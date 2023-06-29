<?php

namespace App\Http\Controllers;

use App\Models\Bts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BtsController extends Controller
{
    
    public function index(Request $request){

        if($request->has('search')){
            $data = Bts::where('bts_name','LIKE','%'. $request->search.'%')
            ->orwhere('ipremote_bts','LIKE','%'. $request->search.'%')
            -> paginate(5);

            
        }
        else{
            $data = Bts::paginate(5);
        }
        
    
    return view('databts',compact('data'));
    
       
    }

    public function create(){
        return view('tambahbts')->with('success','Data Berhasil Di Tambahkan');
    }

    public function store(Request $request){
        $data = Bts::create($request->all());
        return redirect()->route('databts')->with('success','Data Berhasil Di Tambahkan');
    }

    public function deletebts($id){
        $data = Bts::find($id);
        $data -> delete();
        return redirect()->route('databts')-> with('success','Data Berhasil Di Hapus');

        
    }
}

