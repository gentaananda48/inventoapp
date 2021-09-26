@extends('layouts.dashboard')

@section('title', 'Daftar Barang')
    
@section('content')

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Daftar Barang</h1>
        </div>
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
            <table class="table table-bordered table-md">
                <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                @if(!empty($data) && $data->count())
                @foreach ($data as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_barang}}</td>
                <td>{{$data->jumlah}}</td>
                <td>
                  {{-- Conditional Logic status UI --}}
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
                {{-- Button --}}
                <td>
                        <a href="{{route('gm.show',$data->id)}}" class="btn btn-success">Detail</a>
                    </td>
                </tr>
                @endforeach

            </table>
            {{-- Paginator --}}
            <div class="col-md-12">
              {{ $data->where('status', 'pmrequest')->paginate(5)}}
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