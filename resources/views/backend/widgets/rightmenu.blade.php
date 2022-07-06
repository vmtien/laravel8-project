<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng điều khiển
              </p>
            </a>
          </li>
          @foreach($menus as $val)
            <li class="nav-item has-treeview">
              <a href="{{route($val['route'])}}" class="nav-link">
                <i class="nav-icon {{$val['icon']}}"></i>
                <p>
                  {{$val['label']}}
                  @if(isset($val['items']))
                    <i class="right fas fa-angle-left"></i>
                  @endif
                </p>
              </a>
              @if(isset($val['items']))
                <ul class="nav nav-treeview">
                  @foreach($val['items'] as $m)
                    <li class="nav-item">
                      <a href="{{route($m['route'])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$m['label']}}</p>
                      </a>
                    </li>
                  @endforeach
                </ul>
                @endif
            </li>
          @endforeach
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>