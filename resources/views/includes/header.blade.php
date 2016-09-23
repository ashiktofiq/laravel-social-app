<header>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      @if (Auth::check())
      <a class="navbar-brand" href="{{ action('PostController@getDashboard') }}">MYAPP</a>
      @endif
    </div>
<ul class="nav navbar-nav navbar-right">
  @if (Auth::check())
        <li><a href="{{action('UserController@getAccount')}}">{{Auth::user()->first_name}}</a></li>
        <li><a href="{{action('UserController@getLogout')}}">Logout</a></li>
        @endif
      </ul>
    
  </div><!-- /.container-fluid -->
</nav>
</header>