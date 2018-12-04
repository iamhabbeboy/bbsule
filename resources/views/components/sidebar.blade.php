  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="/dashboard">

            <span style="color: #000">Welcome back, {{ Auth::user()->name }} </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li class="active">
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

        </li>
        <li >
            <a href="/dashboard/picture">
                <i class="fa fa-plus-circle"></i>
                <span>Add Pictures</span>
          </a>
        </li>
         <li class="">
            <a href="/dashboard/gallery">
                <i class="fa fa-camera"></i>
                <span>All Pictures</span>
          </a>
        </li>
        <li class="">
       {{--      <a href="/dashboard/products">
                <i class="fa fa-power-off"></i>
                <span>Logout</span>
          </a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </li>
      </ul>
    </section>
  </aside>