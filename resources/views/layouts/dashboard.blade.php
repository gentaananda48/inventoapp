{{-- Head HTML --}}
@include('includes.head');

<body>

  {{-- Navbar --}}
    @include('includes.navbar')
  {{-- Sidebar --}}
    @include('includes.sidebar')

      <!-- Main Content -->
      @yield('content')

      {{-- Footer --}}
      @include('includes.footer')
      
      
