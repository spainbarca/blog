@extends('layouts.simple')

  <!-- Hero -->
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    @section('css_before')
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">
    @endsection

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="hero hero-lg bg-body-extra-light overflow-hidden">
          <div class="hero-inner">
            <div class="content content-full">
              <div class="row">
                <div class="col-lg-5 text-center text-lg-start d-lg-flex align-items-lg-center">
                  <div>
                    <h1 class="h2 fw-bold mb-3">
                      Product Title
                    </h1>
                    <p class="fs-4 text-muted mb-5">
                      Lead paragraph containing the main purpose of your product.
                    </p>
                    <div>
                      <a class="btn btn-primary px-3 py-2 m-1" href="javascript:void(0)">
                        <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                      </a>
                      <a class="btn btn-alt-primary px-3 py-2 m-1" href="javascript:void(0)">
                        <i class="fa fa-fw fa-link opacity-50 me-1"></i> Call to action
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 offset-lg-1 d-none d-lg-block">
                  <img class="img-fluid rounded" src="assets/media/various/promo_dashboard.png" srcset="assets/media/various/promo_dashboard@2x.png 2x"  alt="Hero Promo">
                </div>
              </div>
            </div>
          </div>
          <div class="hero-meta">
            <div>
              <span class="d-inline-block animated bounce infinite">
                <i class="si si-arrow-down text-muted fa-2x"></i>
              </span>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Section 1 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 1
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 1 -->

        <!-- Section 2 -->
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 2
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 2 -->

        <!-- Section 3 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="py-5 push">
              <h2 class="mb-2 text-center">
                Title 3
              </h2>
              <h3 class="text-muted mb-0 text-center">
                Subtitle
              </h3>
            </div>
            <div class="text-center">
              <p>
                Your content..
              </p>
            </div>
          </div>
        </div>
        <!-- END Section 3 -->
      </main>
      <!-- END Main Container -->


    </div>
    <!-- END Page Container -->

    @section('js_after')
    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/dashmix.app.min.js"></script>
    @endsection
  </body>
</html>

  <!-- END Hero -->
@endsection
