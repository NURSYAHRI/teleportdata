@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Teleport Data Persada</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Customer</span>
              <span class="info-box-number">
                {{$jumlahcustomer}}
                
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Customer Actived</span>
              <span class="info-box-number">{{$jumlahcustomeractived}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon  bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Customer Disable</span>
              <span class="info-box-number">{{$jumlahcustomerdisable}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Customer Dismantle</span>
              <span class="info-box-number">{{ $jumlahcustomerdismantle}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="text-center mt-2 ">
        <h1 class="font-weight-bold">Visi dan Misi Teleport Data Persada</h1>
        <h4><li>VISI Perusahaan </li></h4>
        <h5>Menjadikan PT. Teleport Data Persada sebagai perusahaan yang maju dan berkembang dalam bidang usaha Pengelolan Jaringan Telekomunikasi, Penyediaan Barang & Jasa Instalasi.</h5>
        <h4><li>MISI Perusahaan </li></h4>
        <h5>Memberikan dan menjaga komitmen untuk berkembang dan maju bersama dengan mengutamakan kualitas dan pelayanan optimal kepada para rekanan, Klient & Mitra Bisnis.</h5>
      </div>


      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection