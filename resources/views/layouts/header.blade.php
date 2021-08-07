  <!--================== nabver section START ==================-->
  <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('frontend/images/logo.svg')}}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('invest')}}">Invest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                        </li>
                     

        <!----------------- Authentication Links ------------------>

                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <div class="dropdown">
                            <a class="btn btn-first dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                              Hi, {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            @if( \Auth::user()->role  == 1)
                                <li>
                                    <a class="dropdown-item"  href="{{route('admin.dashboard')}}"> admin Dashbord</a>
                                </li>
                               
                            @elseif(\Auth::user()->role  == 2)
                              
                                 <li>
                                    <a class="dropdown-item"  href="{{route('user.mydashboard')}}"> Dashbord</a>
                                </li>
                          
                            @endif


                                <li>   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endguest
         <!----------------- end Authentication Links ------------------>
                    </ul>
                </div>
            </div>
    </nav>
<!--================== nabver section END ==================-->