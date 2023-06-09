
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            {{--<div class="user-panel">
                <div class="pull-left image">
                    @if (Auth::user()->getImage())
                        <img src="{{Storage::url(Auth::user()->getImage())}}" class="img-circle" alt="User Image" />
                    @else
                        <img src="{{asset('assets/images/150x150/User.png')}}" class="img-circle" alt="User Image" />
                    @endif
                </div>
                <div class="pull-left info">
                    <p><a href="{{route('profile.show')}}">{{Auth::user()->name}}</a></p>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>--}}

            {{--<!-- search form -->
            <form action="" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>--}}
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>

                <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                    <a href="{{route('admin')}}" class="nav-link "><i class="fa fa-dashboard"></i>Dashboard</a>
                </li>

                <li class="treeview {{ Request::is('admin/user*') ? 'active' : '' }}">
                    <a style="cursor: pointer">
                        <i class="fa  fa-user "></i><span>Users</span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.user')}}"><i class="fa fa-circle-o"></i>All Users</a></li>
                        <li><a href="{{route('admin.user.create')}}"><i class="fa fa-circle-o"></i>New user</a></li>
                    </ul>
                </li>

                <li class="treeview {{ Request::is('admin/author*') ? 'active' : '' }}">
                    <a style="cursor: pointer">
                        <i class="fa fa-pencil"></i> <span>Authors</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.author')}}"><i class="fa fa-circle-o"></i>All Authors</a></li>
                        <li><a href="{{route('admin.author.create')}}"><i class="fa fa-circle-o"></i>New Author</a></li>
                    </ul>
                </li>

                <li class="treeview {{ Request::is('admin/book*') ? 'active' : '' }}">
                    <a style="cursor: pointer">
                        <i class="fa  fa-book"></i><span>Books</span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.book')}}"><i class="fa fa-circle-o"></i>List Books</a></li>
                        <li><a href="{{route('admin.book.create')}}"><i class="fa fa-circle-o"></i>New Book</a></li>
                    </ul>
                </li>

                <li class="treeview {{ Request::is('admin/loan*') ? 'active' : '' }}">
                    <a style="cursor: pointer">
                        <i class="fa  fa-exchange"></i><span>Loans</span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.loan')}}"><i class="fa fa-circle-o"></i>All Loans</a></li>
                        <li><a href="{{route('admin.loan.create')}}"><i class="fa fa-circle-o"></i>New Loan</a></li>
                    </ul>
                </li>

                <li class="treeview {{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a style="cursor: pointer">
                        <i class="fa fa-list-ul"></i> <span>Categories</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.category')}}"><i class="fa fa-circle-o"></i>List Category</a></li>
                        <li><a href="{{route('admin.category.create')}}"><i class="fa fa-circle-o"></i>New Category</a></li>
                    </ul>
                </li>

                <li class="header">LABELS</li>

                <li class="nav-item {{ Request::is('admin/event*') ? 'active' : '' }}">
                    <a href="{{route('admin.event')}}" class="nav-link"><i class="fa fa-calendar-o"></i>Event</a>
                </li>

                <li class="nav-item {{ Request::is('admin/message*') ? 'active' : '' }}">
                    <a href="{{route('admin.message')}}" class="nav-link"><i class="fa fa-envelope"></i>Messages</a>
                </li>

                <li class="nav-item {{ Request::is('admin/faq*') ? 'active' : '' }}">
                    <a href="{{route('admin.faq')}}" class="nav-link"><i class="fa fa-question-circle"></i>FAQ</a>
                </li>

                @if(auth()->user()->isAdmin())
                    <li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
                        <a href="{{route('admin.settings')}}" class="nav-link"><i class="fa fa-gear"></i>Settings</a>
                    </li>
                @endif
            </ul>
        </section>
        <div class="sidebar-bottom-box">
            <div id="more_btn" onclick="more_menu()" class="user-info">
                <div class="user-info-img pull-left">
                    @if (Auth::user()->getImage())
                        <img src="{{Storage::url(Auth::user()->getImage())}}" alt="User Image" />
                    @else
                        <img src="{{asset('assets/images/150x150/User.png')}}" alt="User Image" />
                    @endif
                </div>
                <div class="user-info-name pull-left">
                    <a>{{Auth::user()->name}}</a><br>
                    <a class="status"><i style="margin-right: 3px" class="fa fa-circle text-success"></i> Online</a>
                </div>
                <div class="more-button">
                    <i class="fa fa-ellipsis-v"></i>
                </div>
            </div>
        </div>
        <div id="more_menu" class="more-menu">
            <a class="more-menu-item" href="{{route('profile.show')}}" target="_blank"><i class="fa fa-user"></i>Profile</a>
            <a class="more-menu-item" href="{{route('dashboard')}}" target="_blank"><i class="fa fa-dashboard"></i>Dashboard</a>
            <hr style="margin: 0">
            <form  action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <button class="more-menu-item" type="submit" style="border: none">
                    <i class="fa fa-sign-out"></i>Logout
                </button>
            </form>
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
<!-- ./wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Add 'active' class to the current menu item
        $('.sidebar-menu .nav-link').each(function() {
            if ($(this).attr('href') === window.location.href) {
                $(this).addClass('active');
                $(this).parents('.treeview').addClass('active');
            }
        });
    });

    function more_menu() {
        var menu = document.getElementById("more_menu");
        var btn = document.getElementById("more_btn");
        if (menu.style.display === "none") {
            menu.style.display = "block";
            btn.classList.add("menu-open");
        } else {
            menu.style.display = "none";
            btn.classList.remove("menu-open");
        }
    }
    window.addEventListener("load", more_menu);
</script>
