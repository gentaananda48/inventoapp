<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{url('/')}}">InventoApp</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url('/')}}">IA</a>
      </div>
      <ul class="sidebar-menu">
              @if (Auth::user()->hasRole('cfo'))
              <li><a class="nav-item" href="{{route('cfo.index')}}">Dashboard</a></li>
              <li><a class="nav-item" href="{{route('cfolist')}}">Request Barang</a></li>

              @elseif (Auth::user()->hasRole('gm'))
              <li><a class="nav-item" href="{{route('gm.index')}}">Dashboard</a></li>
              <li><a class="nav-item" href="{{route('gmlist')}}">Request Barang</a></li>

              @elseif (Auth::user()->hasRole('pm'))
              <li><a class="nav-item" href="{{route('pm.index')}}">Dashboard</a></li>
              <li><a class="nav-item" href="{{route('pmlist')}}">Request Barang</a></li>

              @elseif (Auth::user()->hasRole('purchasing'))
              <li><a class="nav-item" href="{{route('purchasing.index')}}">Dashboard</a></li>
              <li><a class="nav-item" href="{{route('purchasinglist')}}">Request Barang</a></li>

              @elseif (Auth::user()->hasRole('im'))
              <li><a class="nav-item" href="{{route('im.index')}}">Dashboard</a></li>
              <li><a class="nav-item" href="{{route('imlist')}}">Daftar Barang</a></li>
              <li><a class="nav-item" href="{{route('im.create')}}">Tambah Barang</a></li>

              @endif
            
      </ul>
    </aside>
  </div>