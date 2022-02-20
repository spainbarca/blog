
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-glass main-content-boxed">

        <!-- Sidebar -->
        <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
        -->
        <nav id="sidebar" aria-label="Main Navigation">
          <!-- Side Header -->
          <div class="bg-header-dark">
            <div class="content-header bg-white-5">
              <!-- Logo -->
              <a class="fw-semibold text-white tracking-wide" href="index.html">
                <span class="smini-visible">
                  D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                  Dash<span class="opacity-75">mix</span>
                </span>
              </a>
              <!-- END Logo -->

              <!-- Options -->
              <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');">
                  <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>
                <!-- END Toggle Sidebar Style -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                  <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
              </div>
              <!-- END Options -->
            </div>
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
              <ul class="nav-main">
                <li class="nav-main-item">
                  <a class="nav-main-link active" href="gs_landing.html">
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
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xwork.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xwork"></i>
                        <span class="nav-main-link-name">xWork</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xmodern.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xmodern"></i>
                        <span class="nav-main-link-name">xModern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xeco.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xeco"></i>
                        <span class="nav-main-link-name">xEco</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xsmooth.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xsmooth"></i>
                        <span class="nav-main-link-name">xSmooth</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="themes/xinspire.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xinspire"></i>
                        <span class="nav-main-link-name">xInspire</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xdream.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xdream"></i>
                        <span class="nav-main-link-name">xDream</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xpro.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xpro"></i>
                        <span class="nav-main-link-name">xPro</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="css/themes/xplay.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-circle text-xplay"></i>
                        <span class="nav-main-link-name">xPlay</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->
