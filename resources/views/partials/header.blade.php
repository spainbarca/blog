<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
      <!-- Left Section -->
      <div class="d-flex align-items-center">
        <!-- Logo -->
        <a class="link-fx fs-lg fw-semibold text-dark" href="index.html">
          My<span class="text-primary"> Blog</span>
        </a>
        <!-- END Logo -->
      </div>
      <!-- END Left Section -->

      <!-- Right Section -->
      <div class="d-flex align-items-center">
        <!-- Menu -->
        <div class="d-none d-lg-block">
          <ul class="nav-main nav-main-horizontal nav-main-hover">
            <li class="nav-main-item">
              <a class="nav-main-link active" href="/">
                <i class="nav-main-link-icon fa fa-home"></i>
                <span class="nav-main-link-name">Home</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="javascript:void(0)">
                <i class="nav-main-link-icon fa fa-id-card"></i>
                <span class="nav-main-link-name">About</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="javascript:void(0)">
                <i class="nav-main-link-icon fa fa-box-tissue"></i>
                <span class="nav-main-link-name">Archive</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="javascript:void(0)">
                <i class="nav-main-link-icon fa fa-envelope"></i>
                <span class="nav-main-link-name">Contact</span>
              </a>
            </li>
            <li class="nav-main-heading">Extra</li>
            <li class="nav-main-item ms-lg-auto">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-brush"></i>
                <span class="nav-main-link-name">Themes</span>
              </a>
              <ul class="nav-main-submenu nav-main-submenu-right">
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-default"></i>
                    <span class="nav-main-link-name">Default</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xwork.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                    <span class="nav-main-link-name">xWork</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                    <span class="nav-main-link-name">xModern</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xeco.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                    <span class="nav-main-link-name">xEco</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                    <span class="nav-main-link-name">xSmooth</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                    <span class="nav-main-link-name">xInspire</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xdream.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                    <span class="nav-main-link-name">xDream</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xpro.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                    <span class="nav-main-link-name">xPro</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="{{ mix('/css/themes/xplay.css') }}" href="#">
                    <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                    <span class="nav-main-link-name">xPlay</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- END Menu -->

        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-alt-secondary d-lg-none ms-1" data-toggle="layout" data-action="sidebar_toggle">
          <i class="fa fa-fw fa-bars"></i>
        </button>
        <!-- END Toggle Sidebar -->
      </div>
      <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-primary">
      <div class="content-header">
        <form class="w-100" method="POST">
          <div class="input-group">
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
              <i class="fa fa-fw fa-times-circle"></i>
            </button>
            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
          </div>
        </form>
      </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
        </div>
      </div>
    </div>
    <!-- END Header Loader -->
  </header>
  <!-- END Header -->
