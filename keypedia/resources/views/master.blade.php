<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('home.list')}}">KEYPEDIA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

              @auth
              @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        {{-- pake for --}}
                      @foreach($categories as $category)
                      <li><a class="dropdown-item" href="{{route('showKeyboardCategory', ['categoryId' => $category->id])}}">{{$category->name}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                @endif


                {{-- untuk manager --}}
                @if (Auth::user()->role_id == 1)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{route('showAddKeyboard')}}">Add Keyboard</a></li>
                        <li><a class="dropdown-item" href="{{route('showManageCategory')}}">Manage Categories</a></li>
                        <li><a class="dropdown-item" href="{{route('changePassword')}}">Change Password</a></li>
                        <form action="{{route('logout')}}" method="post">
                          @csrf
                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </form>
                    </ul>
                </li>
                @endif

                {{-- untuk user --}}
                @if (Auth::user()->role_id == 2)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('showCart')}}">My Cart</a></li>
                        <li><a class="dropdown-item" href="{{route('showTransactionDetail')}}">Transaction History</a></li>
                        <li><a class="dropdown-item" href="{{route('changePassword')}}">Change Password</a></li>
                        <form action="{{route('logout')}}" method="post">
                          @csrf
                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </form>
                    </ul>
                </li>
                @endif

                @else
                <li class="nav-item">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                </li>

                @endauth


              <li class="nav-item d-flex align-items-center">
                <label class="nav-link">{{ date('D, d-M-Y') }}</label>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="main-content">
        @yield('content')
      </div>

      <footer class="mt-auto d-flex align-items-center justify-content-center ">
            Made by Keypedia
      </footer>
</body>
</html>
