<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{url('resources/upload/useradmin/').'/'.Auth::user()->avatar}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          {{--<li class="treeview">--}}
            {{--<a href="#">--}}
              {{--<i class="fa fa-dashboard"></i> <span>Dashboard</span>--}}
              {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
              {{--<li><a href="{{ url('admin/') }}/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
              {{--<li><a href="{{ url('admin/') }}/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{-- <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Layout Options</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
              <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
              <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
              <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
            </ul>
          </li> --}}
          {{-- <li>
            <a href="../widgets.html">
              <i class="fa fa-th"></i> <span>Widgets</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green">new</small>
              </span>
            </a>
          </li> --}}
          {{-- <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
            </ul>
          </li> --}}
          <li class="treeview <?php if($asset[0] == 'Mn') echo'active'; ?>">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Quản lý danh mục</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($asset[1] == 'cate.add') echo'active'; ?>"><a href="{{route('admin.catecontent.getAdd')}}"><i class="fa fa-circle-o"></i> Thêm mới danh mục</a></li>
              <li class="<?php if($asset[1] == 'cate.index') echo'active'; ?>"><a href="{{route('admin.catecontent.index')}}"><i class="fa fa-circle-o"></i> Danh sách danh mục</a></li>
            </ul>
          </li>
          <li class="treeview <?php if($asset[0] == 'DM') echo'active'; ?>">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Quản lý Menu</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($asset[1] == 'add') echo'active'; ?>"><a href="{{route('admin.cate.getAdd')}}"><i class="fa fa-circle-o"></i> Thêm mới Menu</a></li>
              <li class="<?php if($asset[1] == 'index') echo'active'; ?>"><a href="{{route('admin.cate.index')}}"><i class="fa fa-circle-o"></i> Danh sách Menu</a></li>
              
            </ul>
          </li>
          <li class="treeview <?php if($asset[0] == 'PR') echo'active'; ?>">
            <a href="#">
              <i class="fa fa-table"></i> <span>Quản lý sản phẩm</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($asset[1] == 'pro.add') echo'active'; ?>"><a href="{{route('admin.product.getAdd')}}"><i class="fa fa-circle-o"></i> Thêm mới sản phẩm</a></li>
              <li class="<?php if($asset[1] == 'pro.index') echo'active'; ?>"><a href="{{route('admin.product.index')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
            </ul>
          </li>
          {{-- <li>
            <a href="../calendar.html">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
              </span>
            </a>
          </li> --}}
          <li class="treeview <?php if($asset[0] == 'SL') echo'active'; ?>">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Quản lý slider</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($asset[1] == 'add')echo'active'; ?>"><a href="{{route('admin.slider.getAdd')}}"><i class="fa fa-circle-o"></i> Thêm mới slider</a></li>
              <li class="<?php if($asset[1] == 'index')echo'active'; ?>"><a href="{{route('admin.slider.index')}}"><i class="fa fa-circle-o"></i> Danh sách slider</a></li>
              {{-- <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
              <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
              <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
              <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
              <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
              <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li> --}}
            </ul>
          </li>     <li class="treeview <?php if($asset[0] == 'News') echo'active'; ?>">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Quản lý tin tức</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php if($asset[1] == 'add.news')echo'active'; ?>"><a href="{{route('admin.news.getAdd')}}"><i class="fa fa-circle-o"></i> Thêm mới tin tức</a></li>
              <li class="<?php if($asset[1] == 'index.news')echo'active'; ?>"><a href="{{route('admin.news.index')}}"><i class="fa fa-circle-o"></i> Danh sách tin tức</a></li>
            </ul>
          </li>
          <li class="<?php if($asset[0] == 'CTT') echo'active'; ?>">
            <a href="{{route('admin.contact.index',10)}}">
              <i class="fa fa-envelope"></i> <span>Liên hệ</span>
              {{-- <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span> --}}
            </a>
          </li>
          <li class="<?php if($asset[0] == 'Req') echo'active'; ?>">
            <a href="{{route('admin.request.index')}}">
              <i class="fa fa-share"></i> <span>Yêu cầu từ khách hàng</span>
              <span class="pull-right-container">
                {{-- <small class="label pull-right bg-yellow">12</small> --}}
                <small class="label pull-right bg-green" id="i_total"></small>
                {{-- <small class="label pull-right bg-red">5</small> --}}
              </span>
            </a>
          </li>
          {{-- <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level One
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
          </li>
          <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> --}}
          {{-- <li class="header">LABELS</li>
          <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>