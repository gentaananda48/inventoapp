
@extends('layouts.dashboard')

@section('title', 'Edit Barang')
    
@section('content')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1 >Edit Barang</h1>
    </div>
    <div class="card">
        <div class="card-header">
        <h4>Form Edit Barang</h4>
        </div> 
        <form method="POST" action="{{route('im.update', $data->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Masukan nama barang" value="{{$data->nama_barang}}" name="nama_barang">
                </div>
                <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="number" class="form-control" placeholder="Masukan jumlah barang" value="{{$data->jumlah}}" name="jumlah">
                </div>
                <div style="float: right;">
                    <button type="button" class="btn btn-primary btn-md text-light"onclick="history.back(-1)">Back</button>
                    <button type="submit" class="btn btn-success btn-md text-light">Simpan</button><br><br>
                </div>
            </div>
        </div>
    </form>
    </div>
    </section>
</div>


@endsection
