
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="icon-bar"></span> <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div
        class="collapse navbar-collapse offset"
        id="navbarSupportedContent"
      >
        <ul class="nav navbar-nav menu_nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item submenu dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >Pages</a
            >
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/course_details') }}"
                  >Course Details</a>
              </li>
            </ul>
          </li>
          <li class="nav-item submenu dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >Blog</a
            >
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog_details') }}"
                  >Blog Details</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#registerForm">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginForm">Login</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link search" id="search">
              <i class="ti-search"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
 