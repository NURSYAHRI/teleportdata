@extends('layout.admin')
@section('content')

<body>

  
  <h1 class="text-center mb-5 mt-5">Tambah Data BTS</h1>

  <div class="container mb-5"> 
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertdatabts" method="POST" enctype="multipart/form-data">
                @csrf

                  <!-- nama -->
          
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama BTS</label>
                  <input type="text" name="bts_name" class="form-control"  placeholder="Masukan Nama Client" aria-describedby="emailHelp">
          
                </div>
                <!-- Contact -->
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">PIC BTS</label>
                    <input type="text" name="contact" class="form-control" placeholder="Masukan Contact Client" aria-describedby="emailHelp">
              
                    
                </div>
                
                   <!-- telepon -->
          
                  <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukan Nomor Telepon Client" aria-describedby="emailHelp">
            
                   </div>
                     <!-- alamat -->
                          
                    <div class="form-group mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <textarea name="alamatbts"  cols="30" rows="2" placeholder="Masukan Alamat Client" class="form-control"></textarea>
        
                   </div>
                          <!-- Koordinat -->
                                      
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kordinat BTS</label>
                            <input type="text" name="koordinat_bts" class="form-control" placeholder="Masukan Bandwidht Client"  aria-describedby="emailHelp">

                          </div>


                          <!-- ip Remote -->

                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">IP Remote</label>
                            <input type="text" name="ipremote_bts" class="form-control" placeholder="Masukan IP Address Client" aria-describedby="emailHelp">

                          </div>
        
                          <!-- Dokumentasi  -->
                          <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dokumentasi BTS</label>
                            <textarea name="dokumentasi_bts" cols="30" rows="2" placeholder="Keterangan Tidak Boleh Kosong" class="form-control"></textarea>
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