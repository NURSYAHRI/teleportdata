@extends('layout.admin')
@section('content')


<body>
  <h1 class="text-center mb-4">Edit Data Customer</h1>

  <div class="container mb-5"> 
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/updatedatacs/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">ID Client</label>
                  <input type="text" name="id_customer" class="form-control" placeholder="Masukan Id Client" aria-describedby="emailHelp" value="{{$data->id_customer}}">
          
                </div>

                  <!-- nama -->
          
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control"  placeholder="Masukan Nama Client" aria-describedby="emailHelp" value="{{$data->nama}}">
          
                </div>
                <!-- category -->
                            
                <div class="form-group mb-3">
                <label for="exampleInputEmail1" class="form-label">Category</label>
                    <select class="form-select" name="category" aria-label="Default select example" value="{{$data->category}}">
                    <option selected>Pilih Kategori Layanan</option>
                    <option value="Fiber Optic">Fiber Optic</option>
                    <option value="Microwave">Microwave</option>
                    <option value="Wireless">Wireless</option>
                    </select>
                        
                </div>
                        <!-- pic -->
                  
                  <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">PIC</label>
                  <input type="text" name="pic" value="{{$data->pic}}" class="form-control" placeholder="Masukan Contact Client" aria-describedby="emailHelp">
            
                  </div>
                   <!-- telepon -->
          
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                    <input type="text" name="telepon" value="{{$data->telepon}}" class="form-control" placeholder="Masukan Nomor Telepon Client" aria-describedby="emailHelp">
            
                   </div>
                              <!-- alamat -->
                                      
                              <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" value="{{$data->alamat}}"  cols="30" rows="2" placeholder="Masukan Alamat Client" class="form-control">

                          </div>
                          <!-- bandwidht -->
                                      
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Bandwidht</label>
                            <input type="text" name="bandwidht" value="{{$data->bandwidht}}" class="form-control" placeholder="Masukan Bandwidht Client"  aria-describedby="emailHelp">

                          </div>

                          <!-- BTS -->

                          {{-- <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">BTS</label>
                            <input type="text" name="bts" value="{{$data->bts}}" class="form-control" placeholder="Masukan BTS Client"  aria-describedby="emailHelp">

                          </div> --}}

                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">BTS</label>
                            <select class="form-select" name="id_bts" aria-label="Default select example">
                                <option selected>Pilih BTS</option>

                                @foreach ($databts as $data )
                                <option value="{{$data->id}}">{{$data->bts_name}}</option>
                                @endforeach
                            </select>
                          </div>
                          <!-- ip -->

                          <div class="form-group mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label mt-3">IP Address</label>
                            <input type="text" name="ip" value="{{$data->ip}}" class="form-control" placeholder="Masukan IP Address Client" aria-describedby="emailHelp">

                          </div>
                          <!-- Status -->
                                    
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <select class="form-select" name="status" value="{{$data->status}}" aria-label="Default select example">
                                <option selected>Pilih Status Pelanggan</option>
                                <option value="Actived">Actived</option>
                                <option value="Disable">Disable</option>
                                <option value="Pending">Pending</option>
                                <option value="Dismantle">Dismantle</option>
                            </select>
                            
                            <!-- <input type="text" name="status" class="form-control" placeholder="Masukan Status Client : Actived/Disable/Dismantle"  aria-describedby="emailHelp"> -->

                          </div>

                          <!-- tanggal berlangganan -->
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Berlangganan</label>
                            <input type="date" name="tanggal_berlangganan" value="{{$data->tanggal_berlangganan}}" class="form-control"  aria-describedby="emailHelp">

                          </div>
                          <!-- keterangan -->
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" value="{{$data->keterangan}}" cols="30" rows="2" placeholder="Keterangan Tidak Boleh Kosong" class="form-control">

                          </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>

      </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  -->
</body>
  
@endsection