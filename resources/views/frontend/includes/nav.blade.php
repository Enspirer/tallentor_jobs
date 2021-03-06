<nav class="navbar fixed-top navbar-expand-lg topNav">
  <div class="container topNav__wrapper">
    <a class="navbar-brand" href="#"><div class="title">Tallentor <span>Jobs</span></div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact us</a>
        </li>
      </ul>
      <div class="button-block">
        <!-- <a href="{{url('/register')}}" class="btn-fill cta-btn">Job Seeker</a> -->
        <a href="{{url('/register')}}" class="btn-outline cta-btn">Join Now</a>
      </div>
    </div>
  </div>
</nav>