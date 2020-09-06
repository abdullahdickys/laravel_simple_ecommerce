@extends('layouts.app')

@section('content')
<div class="container">
    <center><b>Dummy Data E-Commerce</b></center>
    <div class="row justify-content-center">
        {{-- <div class="col-md-12 mb-4"> --}}
        {{-- <img src="#" width="" alt=""> --}}
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">Dashboard</div> --}}

                {{-- <div class="card-body"> --}}
                    {{-- You are logged in! --}}
                    @foreach ($barangs as $barang)
                    <div class="col3">
                        <div class="card" style="width: 18rem;">
                        <img src="{{url('uploads')}}/{{$barang->gambar}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$barang->nama_barang}}</h5>
                                <p class="card-text">
                                    <strong>Harga : </strong>Rp.{{$barang->harga}}</p>
                                    <strong>Stok : </strong>{{$barang->stok}}</p>
                                <hr>
                            <strong>Keterangan: </strong><br>
                            {{$barang->Keterangan}}
                            <a href="{{url('order')}}/{{$barang->id}}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Order</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- @foreach ($barangs as $barang)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>
@endsection
