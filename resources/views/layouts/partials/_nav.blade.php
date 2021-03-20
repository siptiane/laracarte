<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Main navigation">
  <div class="container">
    <a class="navbar-brand" href="{{ route('rout_path') }}">{{config('app.name')}}</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item {{ set_active_route('rout_path')}}">
          <a class="nav-link" aria-current="page" href="{{ route('rout_path')}}">Home</a>
        </li>
        <li class="nav-item {{ set_active_route('about_path')}}">
          <a class="nav-link" href="{{ route('about_path')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Planet</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="http://Laravel.com">Laravel.com</a></li>
            <li><a class="dropdown-item" href="http://Laravel.io">Laravel.io</a></li>
            <li><a class="dropdown-item" href="http://Laracasts.com">Laracasts</a></li>
            <li><a class="dropdown-item" href="http://Larajobs.com">Larajobs</a></li>
            <li><a class="dropdown-item" href="http://Laravel-news.com">Laravel | News</a></li>
            <li><a class="dropdown-item" href="http://Larachat.com">Larachat</a></li>
          </ul>
        </li>
        <li class="nav-item {{ set_active_route('contact_path')}}">
          <a class="nav-link" href="{{ route('contact_path')}}">Contact</a>
        </li>
      </ul>
    </div>
    <ul class="nav navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
      <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
    </ul>
  </div>
</nav>
