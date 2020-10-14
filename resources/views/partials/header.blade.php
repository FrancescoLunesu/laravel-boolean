<nav class="navbar navbar-expand-lg navbar-light row">
  <a class="navbar-brand col-6" href="#">
      <img class="logo" src="https://www.boolean.careers/images/misc/logo.png" alt="Logo_Boolean">
  </a>
  {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    CIao<span class="navbar-toggler-icon"></span>
  </button> --}}
  <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ (url()->current() == route('StaticPage.home')) ? 'active' : ''}}">
        <a class="nav-link" href="{{route('StaticPage.home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ (url()->current() == route('StaticPage.chisiamo')) ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('StaticPage.chisiamo')}}">Chi Siamo</a>
      </li>
      <li class="nav-item {{ (url()->current() == route('Student.studenti')) ? 'active' : ''}}">
        <a class="nav-link" href="{{route('Student.studenti')}}">Studenti</a>
      </li>
    </ul>
  </div>
</nav>
