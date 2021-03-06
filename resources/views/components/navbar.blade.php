 
<nav class="navbar navbar-expand-md navbar-dark navbar-color">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ URL::asset('assets/logo_cortada.png') }}" height="70px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('sobre') }}">Sobre</a>            
            </li>

            <li class="nav-item active dropdown">
                <a class="nav-link  dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Temporadas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($anos as $ano)
                        <a class="dropdown-item" href="{{ url('historia/'.$ano) }}">{{$ano}}</a>
                    @endforeach
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="{{ url('apoio') }}">Apoio</a>            
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="{{ url('blog') }}">Blog</a>
            </li>

            @auth
            <li class="nav-item active">
                <a class="nav-link " href="{{ url('dashboard/historia') }}">Dashboard</a>                
            </li>
            @endauth
        </ul>

        <!-- Right Side Of Navbar -->
        @auth
        <span class="nav-item navbar-text dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </span>
        @endauth
    </div>
</nav>