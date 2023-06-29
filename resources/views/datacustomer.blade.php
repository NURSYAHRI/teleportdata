@extends('layout.admin')

@push('css')
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container"> 
    <a class="btn btn-success" href="/tambahcustomer">Tambah Data Customer +</a>
    {{-- {{Session::get('halaman_url')}} --}}
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/customer" method="GET">
        <input type="search" placeholder="Masukan ID" name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
      </div>
      <div class="col-auto ">
         <button type="submit" class="btn btn-info">Search</button>
       </div>
      </form>
      <div class="col-auto">
        <a class="btn btn-info" href="/exportpdf">Export PDF</a>
      </div>
  
    </div>
  
      <div class="row">
        {{-- @if ($message = Session :: get('success'))
        <div class="alert alert-success" role="alert">
          {{$message}}
        </div>
        @endif --}}
        <table class="table table-bordered mt-5">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id Customer</th>
              <th scope="col">Nama</th>
              <th scope="col">Category</th>
              <th scope="col">PIC</th>
              <th scope="col">Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Bandwidht</th>
              <th scope="col">BTS</th>
              <th scope="col">IP Address</th>
              <th scope="col">Status</th>
              <th scope="col">Tanggal berlangganan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
  
            @php
              $no = 1;
            @endphp
            @foreach ($data as $index=> $row )
              
            
            <tr>
              <th scope="row">{{$index + $data->firstItem()}}</th>
              <td>{{$row->id_customer}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->category}}</td>
              <td>{{$row->pic}}</td>
              <td>{{$row->telepon}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->bandwidht}}</td>
              <td>{{$row->bts->bts_name}}</td>
              <td>{{$row->ip}}</td>
              <td>{{$row->status}}</td>
              <td>{{$row->tanggal_berlangganan}}</td>
              <td>{{$row->keterangan}}</td>
              <td>
                <a href="/tampilkandatacs/{{$row->id}}"  class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger delete" data-id="{{$row->id}}" data-id_customer="{{$row->id_customer}}" data-nama="{{$row->nama}}" >Delete</a> 
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $data->links() }}
      </div>
  
  </div>
  
</div>


@endsection

@push('scripts')

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

      <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

 <script>

    $('.delete').click(function(){
      var customerid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
      var id_customer = $(this).attr('data-id_customer');

      swal({
                title: "Yakin?",
                text: "kamu akan menghapus data customer dengan id "+id_customer+" "+nama+" ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  window.location = "/delete/"+customerid+" "
                  swal("Data Berhasil Di Hapus", {
                    icon: "success",
                  });
                } else {
                  swal("Data Tidak Jadi Di Hapus");
                }
            });
    });
 </script>

 <script>
  @if (Session::has('success'))
  toastr.success("{{Session::get('success')}}")
  @endif
  
 </script>
  
@endpush