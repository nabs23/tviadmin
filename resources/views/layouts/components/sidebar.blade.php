  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        @foreach(config('menu') as $item)
                @if (isset($item['items']))
                  <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>{{ $item['name'] }}</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                      @foreach($item['items'] as $submenu)
                        <li class="active">
                          <a href="{{ $submenu['url'] }}">
                            <i class="fa {{ isset($submenu['icon']) ? $submenu['icon'] : 'fa-link'}}"></i> 
                            <span>{{ $submenu['name'] }}</span>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  </li>
                @else
                  <li class="active">
                    <a href="{{$item['url']}}">
                      <i class="fa {{ isset($item['icon']) ? $item['icon'] : 'fa-link'}}"></i> 
                      <span>{{$item['name']}}</span>
                    </a>
                  </li>
                @endif
        @endforeach
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>