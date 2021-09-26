@extends('layouts.dashboard')

@section('title', 'Detail')
    
@section('content')


                <!-- Main Content -->
                <div class="main-content">
                  <section class="section">
                    <div class="section-header">
                      <h1>Detail</h1>
                    </div>
          
                    <div class="section-body">
                      <div class="card">
          
                        <div class="card-header">
                          <h4>Detail Barang</h4>
                        </div>
                        <div class="card-body">
                              <div class="row">
                                  <div class="col">
                                      <div class="form-group">
                                          <label for="id"><h6>ID</h6></label>
                                          <h6>{{$data->id}}</h6>
                                      </div>
          
                                      <div class="form-group">
                                          <label for="image"><h6>Gambar</h6></label><br>
                                          <img src="{{url('img/barang/'.$data->image)}}" alt="Data Gambar tidak ada" title="Gambar" width="200 px">
                                      </div>
          
          
                                  </div>
                                  <div class="col">
                                      <div class="form-group">
                                          <label for="plat_no"><h6>Nama</h6></label>
                                          <h6>{{$data->nama_barang}}</h6>
                                      </div>
                                      <div class="form-group">
                                          <label for="j_kend"><h6>Status</h6></label><br>
                                          @if($data->status == 'available')  
                                            @if($data->jumlah > 20)
                                            <div class="btn bg-success text-light">
                                            Available
                                            </div>
                                            @elseif($data->jumlah == 0)
                                            <div class="btn bg-danger text-light">
                                            Unvailabel
                                            </div>
                                            @elseif($data->jumlah < 20)
                                            <div class="btn bg-warning text-light">
                                            Almost Unavailable
                                            </div>
                                            @endif
                                          @elseif($data->status == 'reject')
                                          <div class="btn bg-danger text-light">
                                            Rejected
                                          </div>
                                          @elseif($data->status == 'unavailable')
                                          <div class="btn bg-danger text-light">
                                            Unavailable
                                          </div>
                                          @elseif($data->status != 'available' || 'reject' || 'unavailable')
                                          <div class="btn bg-warning text-light">
                                            Requesting
                                          </div>
                                          @endif
                                      </div>
                                      <div class="form-group">
                                          <label for="created_at"><h6>Jumlah Pengajuan</h6></label>
                                          <h6>{{$data->rencana_pesanan}}</h6>
                                      </div>
                                      
                                  </div>
                              </div>
                          <button type="button" class="btn btn-primary btn-md text-light" onclick="history.back(-1)">Back</button>
                          <div class="col-6" style="float: right;">
                            <div class="row">
                              <div class="col">
                            <form method="POST" action="{{route('pm.update', $data->id)}}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <input type="hidden" class="form-control" placeholder="Masukan jumlah barang" value="pmrequest" name="status">
                          <button type="submit" class="btn btn-success btn-md text-light">Setujui Permintaan</button>
                            </form>
                          </div>
                          <div class="col">
                            <form method="POST" action="{{route('pm.update', $data->id)}}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <input type="hidden" class="form-control" placeholder="Masukan jumlah barang" value="reject" name="status">
                          <button type="submit" class="btn btn-danger btn-md text-light">Reject</button>
                            </form>
                          </div>
                        </div>
                          </div>
                      </div>
                    </div>
                  </section>
                  </div>


@endsection