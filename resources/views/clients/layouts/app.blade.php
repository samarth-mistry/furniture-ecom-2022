<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{{ config('app.name') }}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="{{ asset('dist/cli-asset/styles/layout.css') }}" type="text/css" />
<link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">
@stack('styles')
<script type="text/javascript" src="{{ asset('dist/cli-asset/scripts/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/cli-asset/scripts/jquery.innerfade.js') }}"></script>
<!-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}" defer></script>
@stack('scripts')
</head>
<body id="top">
  <div class="wrapper col1">
    <div id="header">
      <div id="logo">
        <h1><a href="{{ url('/') }}">{{ config('app.name') }}</a></h1>
        <p>Buy furniture goods online...</p>
      </div>
      <div id="search">
        <form action="#" method="post">
          <fieldset>
            <legend>Site Search</legend>
            <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
            <input type="submit" name="go" id="go" value="GO" />
          </fieldset>
        </form>
      </div>
      <div id="topnav">
        <ul>
          @if(Auth::user())
          <li class="last"><a href="#">{{ Auth::user()->name }}</a>
            <ul>
              <li><a href="{{ route('profile') }}" class="bg-primary">Profile Settings</a></li>
              <li><a href="{{ route('logout') }}" class="text-danger"><b>Logout</b></a></li>
            </ul>
          </li>
            <li></li>
          @else
            <li class="last"><a href="{{ route('login') }}">Login/Sign-up</a></li>
          @endif
          <li><a href="#">Other</a>
            <ul>
              <li><a href="#">Guide</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </li>
          <li class="{{ request()->is('wish-list*') ? 'active':'' }}"><a href="pages/full-width.html">Wish List</a></li>
          <li class="{{ request()->is('shopping*') ? 'active':'' }}"><a href="{{ route('shopping') }}">Shopping</a></li>
          <li class="{{ request()->is('/*') ? 'active':'' }}"><a href="{{ url('/') }}">Home</a></li>
        </ul>
      </div>
      <br class="clear" />
    </div>
  </div>
     @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
    @include('clients.layouts.footer')
</body>
</html>