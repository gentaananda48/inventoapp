@extends('layouts.dashboard')

@section('title', 'Dashboard')
    
@section('content')

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Dashboard</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="fas fa-archive"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Barang</h4>
                </div>
                <div class="card-body">
                  {{$barang}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="fas fa-exclamation"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Request</h4>
                </div>
                <div class="card-body">
                  {{$oldrequest}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="fas fa-times"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Ditolak</h4>
                </div>
                <div class="card-body">
                  {{$rejected}}
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
            <table class="table table-bordered table-md">
                <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                </tr>

                @if(!empty($data) && $data->count())
                @foreach ($data as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_barang}}</td>
                <td>{{$data->jumlah}}</td>
                <td>
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
                </td>
                </tr>
                @endforeach

            </table>
            <div class="col-md-12">
              {{ $data->where('status', 'gmrequest')->paginate(5)}}
          </div>
          @else
          <tr>
            <td colspan="4" class="text-center">Data Not Found</td>
        </tr>
      </table>
          @endif
            </div>
      </section>
    </div>




@endsection