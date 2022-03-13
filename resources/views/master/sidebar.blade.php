<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('index_siswa')}}">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('peserta')}}">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">peserta</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('index_matapelajaran')}}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Mata Peljaran</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('index_ujian')}}">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Ujian</span>
            </a>
          </li>
        </ul>
      </nav>