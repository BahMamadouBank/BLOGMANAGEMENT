
<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
                

                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                 


                  <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                      </a>
                      <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item active" href="/adds">Add</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/index">Liste</a>
                    </li>
                  </ul>

                  <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produits
                      </a>
                      <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item active" href="/pd-adds">Add</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/pd-index">Liste</a>
                    </li>
                  </ul>

                  
                  <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-item nav-link dropdown-toggle mr-md-2" href="art" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comment
                      </a>
                      <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item active" href="/comment-adds">Add</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/comment-index">Liste</a>
                    </li>
                  </ul>

                </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



