<link href="css/freelancer.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">SISWAKU<span class="sr-only">(current)</span></a>
      </li>
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
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('siswa')}}">Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('kelas')}}">Kelas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('guru')}}">Guru</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('walikelas')}}">Walikelas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('about')}}">About</a>
      </li>
           
      <li class="nav-item mx-0 mx-lg-1">
        <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        @endguest

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </li>
    </ul>
  </div>
</nav>


