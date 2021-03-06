        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('public/assets/images/faces/face1.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>
                  <span class="text-secondary text-small">{{ ucfirst(Auth::user()->role) }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            @if(Auth::user()->role == 'admin')
              <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/pandits')}}">
                  <span class="menu-title">Franchise</span>
                  <i class="mdi mdi-account menu-icon"></i>
                </a>
              </li>

            @endif

             @if(Auth::user()->role == 'admin')
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/admin/users')}}">
                    <span class="menu-title">Users</span>
                    <i class="mdi mdi-account menu-icon"></i>
                  </a>
                </li>
              @endif

          </ul>
        </nav>
        