<header class="header_section">
  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <img src="{{asset('front-end/images/logo.png')}}" alt="">
        <span>
          Adward
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item ">
              <a class="nav-link" href="about.html"> About </a>
            </li> --}}

            <li class="nav-item ">
              <a class="nav-link" href="{{route('home.teacher')}}"> Teacher </a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="vehicle.html"> vehicle </a>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link" href="{{route('home.contact_us')}}">Contact Us</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <input type="text">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </nav>
    </div>
</header>