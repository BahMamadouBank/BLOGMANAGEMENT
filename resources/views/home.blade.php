

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">{{ \Auth::user()->name}}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav navbar-nav-right">
                  <li class="active">
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">categories
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li class="nav-item">
                    <a class="nav-link" href="{{ url('adds') }}">Categorie add</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ url('/index') }}"><i class="fa fa-angle-down site-nav-arrow"></i>Categories liste <span class="sr-only">(current)</span></a>
                  </li>
                      </ul>
                 </li>
                   <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produit
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pd-adds') }}">Product add</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pd-index') }}">Product liste</a>
                      </li>
                      </ul>
                  </li>
                 
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilisateur
                    <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/create')}}">User add</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" href="{{url ('/show') }}">User liste</a>
                          </li>
                        </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Role
                    <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li class="nav-item">
                              <a class="nav-link" href="{{url('/role-adds')}}">Role add</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="{{url('/role-index')}}">Role liste</a>
                          </li>
                      </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">commande
                    <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li class="nav-item">
                              <a class="nav-link" href="{{url('/add')}}">add commande</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="{{url('/show')}}">commande liste</a>
                          </li>
                      </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="{{url('logout')}}">Logout</a>
                  </li>
          </ul>
      </div>
 </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('succes'))
                    <p class="alert alert-success">{{ Session::get('succes') }}</p>                
                @endif
            </div>
        </div>
       @yield('content')
    </div>
    
</body>
</html>
