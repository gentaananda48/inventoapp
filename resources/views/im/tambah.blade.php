
@extends('layouts.dashboard')

@section('title', 'Tambah Barang')
    
@section('content')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1 >Tambah Barang</h1>
    </div>
    <div class="card">
        <div class="card-header">
        <h4>Form Tambah Barang</h4>
        </div>
    <form method="POST" action="{{url('im')}}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Masukan nama barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="number" class="form-control" placeholder="Masukan jumlah barang" name="jumlah" required>
                </div>
                <div class="form-group">
                    <label>Masukan Gambar</label>
                    <div class="form-group custom-file">
                        <input type="file" class="form-control" id="inputGroupFile02" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    @if('jumlah' > 20)
                    <input type="hidden" class="form-control" value="available" name="status" required>
                    @elseif('jumlah' == 0)
                    <input type="hidden" class="form-control" value="not available" name="status" required>
                    @elseif('jumlah' < 20)
                    <input type="hidden" class="form-control" value="almost unavailable" name="status" required>
                    @endif
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
