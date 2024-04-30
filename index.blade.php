@extends('layout.app')

@section('konten')

@php
  $info_user = @info_user(session('user_id'));
@endphp

<div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3 ">
              <div class="card card-hover bg-secondary">
                <div class="box bg-pink-400 text-center border border-2 border-success">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-account"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_pelanggan }}</h3>
                  <h6 class="text-light">Total Pelanggan</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover bg-secondary ">
                <div class="box bg-pink-400 text-center  border border-2 border-info">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-sale"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_penjualan }}</h3>
                  <h6 class="text-light">Total Penjualan</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover bg-secondary">
                <div class="box bg-pink-400 text-center  border border-2 border-danger">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-shopping"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_pembelian }}</h3>
                  <h6 class="text-light">Total Pembelian</h6>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover bg-secondary">
                <div class="box bg-pink-400 text-center  border border-2 border-primary">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_produk }}</h3>
                  <h6 class="text-light">Total Produk</h6>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover bg-secondary">
                <div class="box bg-pink-400 text-center  border border-2 border-warning">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-account-star"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_supplier }}</h3>
                  <h6 class="text-light">Total Supplier</h6>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover bg-secondary">
                <div class="box bg-pink-400 text-center  border border-2 border-dark">
                  <h1 class="font-light text-light">
                    <i class="mdi mdi-account-multiple"></i>
                  </h1>
                  <h3 class="text-light">{{ @$total_user }}</h3>
                  <h6 class="text-light">Total User</h6>
                </div>
              </div>
            </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h4><small>Selamat Datang</small> {{ @$info_user['nama'] }}</h4>
        <h3><small>Anda Login Sebagai</small> {{ @$info_user['level'] }}</h3>
      </div>
    </div>
  </div>
</div>
@endsection