<nav class="navbar navbar-dark navbar-expand-lg bg-primary shadow-sm p-0">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fab fa-hubspot fa-2x fa-fw"></i>  CurricuLinks
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
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
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/breaches')}}"><i class="fas fa-user-lock"></i> Data Breaches</a>
                </li> --}}
                <li class="nav-item mr-3">
                    <a class="nav-link text-center disabled" href="{{url('/')}}"><i class="fas fa-th fa-2x fa-fw"></i><br><span class="d-lg-none_">Dashboard</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-center" href="{{url('/subjects')}}"><i class="fas fa-address-book fa-2x fa-fw"></i><br><span class="d-lg-none_">Subjects</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-center" href="{{url('/topics')}}"><i class="fas fa-file-contract fa-2x fa-fw"></i><br><span class="d-lg-none_">Topics</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-center" href="{{url('/topics/clinks')}}"><i class="fas fa-project-diagram fa-2x fa-fw"></i><br><span class="d-lg-none_">Links</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-center disabled"  href="{{url('/')}}"><i class="fas fa-user-lock fa-2x fa-fw"></i><br><span class="d-lg-none_">Users</span></a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link text-center disabled" href="{{url('/')}}"><i class="fas fa-cogs fa-2x fa-fw"></i><br><span class="d-lg-none_">{{ __('Admin') }}</a>
                </li>
                <li class="nav-item mr-3">
                    {{-- <a class="nav-link text-center" href="{{url('/logout')}}"><i class="fas fa-cogs fa-2x fa-fw"></i><br><span class="d-lg-none_">{{ __('Log Out') }}</a> --}}
                    <a class="nav-link text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-cogs fa-2x fa-fw"></i><br><span class="d-lg-none_">{{ __('Log Out') }}
                        {{-- ({{ Auth::user()->name }}) --}}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
