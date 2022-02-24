<div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link{{ request()->is('admin') ? ' active' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-main-link-icon fa fa-location-arrow"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                    <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>
                </a>
            </li>
            <li class="nav-main-heading">Navegación</li>
            <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="true" href="#">
                    <i class="nav-main-link-icon fa fa-lightbulb"></i>
                    <span class="nav-main-link-name">Examples</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"
                            href="/pages/datatables">
                            <span class="nav-main-link-name">DataTables</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}"
                            href="/pages/slick">
                            <span class="nav-main-link-name">Slick Slider</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}"
                            href="/pages/blank">
                            <span class="nav-main-link-name">Blank</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-item{{ request()->is('admin/posts*') ? ' open' : '' }}">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="true" href="#">
                    <i class="nav-main-link-icon fa fa-blog"></i>
                    <span class="nav-main-link-name">Blogs</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('admin/posts') ? ' active' : '' }}" href="{{ route('admin.posts.index') }}">
                            <i class="nav-main-link-icon fa fa-folder-tree"></i>
                            <span class="nav-main-link-name">Manage Posts</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_onboarding.html">
                            <i class="nav-main-link-icon fa fa-folder-plus"></i>
                            <span class="nav-main-link-name">Add Post</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_comp_nestable.html">
                            <i class="nav-main-link-icon fa fa-bee"></i>
                            <span class="nav-main-link-name">Edit Post</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="true" href="#">
                    <i class="nav-main-link-icon fa fa-cog"></i>
                    <span class="nav-main-link-name">Main Menu</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon fa fa-inbox"></i>
                            <span class="nav-main-link-name">1.1 Item</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon fa fa-fire"></i>
                            <span class="nav-main-link-name">1.2 Item</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                            <i class="nav-main-link-icon fa fa-share-alt"></i>
                            <span class="nav-main-link-name">1.3 Item</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-main-heading">More</li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="/">
                    <i class="nav-main-link-icon fa fa-globe"></i>
                    <span class="nav-main-link-name">Landing</span>
                </a>
                <a class="nav-main-link" href="/">
                    <i class="nav-main-link-icon fa fa-arrow-alt-circle-left"></i>
                    <span class="nav-main-link-name">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->
