<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InventoApp</title>
    
    {{-- CSS Libs --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap"rel="stylesheet"/>
    <style>
        a {
            background-color:transparent;
            color:inherit;
            text-decoration:inherit;
        },
        html {
            font-family: "Montserrat", sans-serif;
        }
    </style>

    {{-- JS Libs --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-body">
        <div class="container">
            
          <a class="navbar-brand" href="{{url('/')}}">InventoApp</a>
          <div class="d-flex">
            <ul class="navbar-nav me-auto">
            @if (Route::has('login'))
                @auth
              <li class="nav-item me-4">
                @if (Auth::user()->hasRole('cfo'))
                <a href="{{url('cfo')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                @elseif (Auth::user()->hasRole('gm'))
                <a href="{{url('gm')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                @elseif (Auth::user()->hasRole('pm'))
                <a href="{{url('pm')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                @elseif (Auth::user()->hasRole('purchasing'))
                <a href="{{url('purchasing')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                @elseif (Auth::user()->hasRole('im'))
                <a href="{{url('im')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @endif
              </li>
              <li class="nav-item">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
              </li>
                @endauth
                
              @endif
            </ul>
          </div>
        </div>
      </nav>
    <div class="main-content">
        <div class="container">
        <div class="d-none d-md-block">
            <div class="row mt-2">
              <div class="col-md-6 justify-content-center align-self-center">
                <h1>
                  <strong>InventoApp</strong><br />
                </h1><h2
                    >Easier <i>Warehouse</i> Management</h2
                  >
                <p>
                    InventoApp is a useful application to help manage warehouse goods.<br>Make sure your warehouse is well managed.
                </p>
                <br />
                
              </div>
              <div class="col-md-6">
                <img src="{{asset('assets/img/hero.jpg')}}" alt="Hero" width="100%" />
              </div>
            </div>
          </div>
      
          <!-- For Mobile -->
          <div class="d-sm-block d-md-none">
            <div class="row mt-3">
              <div class="col-md-6">
                <img src="{{asset('assets/img/hero.jpg')}}" alt="Hero" width="100%">
              </div>
              <div class="col-md-6 mt-3 justify-content-center align-self-center">
                <h3>
                    <strong>InventoApp</strong><br>
                </h3>
                  <h4>Easier <i>Warehouse</i> Management</h4>
                  <p>
                      InventoApp is a useful application to help manage warehouse goods.<br>Make sure your warehouse is well managed.
                  </p>
                  <br >
              </div>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>