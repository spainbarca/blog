@extends('layouts.simple')


@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Blog</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Widgets</li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Cover Link Stories -->
    <h2 class="content-heading">Cover Link Stories</h2>
    <div class="row items-push">
      <div class="col-md-6 col-xl-4">
        <!-- Story #9 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo9.jpg');" href="javascript:void(0)">
          <div class="block-content bg-black-50">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-primary fw-bold p-2 text-uppercase">
                  Travel
                </span>
              </p>
              <p class="fs-sm">
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-white-50"></i> 400
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-white-50"></i> 89
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-white-50"></i> 44
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold text-white mb-1">
              Exploring the forest in the mist
            </p>
            <p class="fw-medium text-white-75">
              Adam McCoy &middot; 12 min
            </p>
          </div>
        </a>
        <!-- END Story #9 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #10 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo11.jpg');" href="javascript:void(0)">
          <div class="block-content bg-black-50">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-danger fw-bold p-2 text-uppercase">
                  Inspiration
                </span>
              </p>
              <p class="fs-sm">
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-white-50"></i> 433
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-white-50"></i> 78
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-white-50"></i> 43
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold text-white mb-1">
              Building successful web apps
            </p>
            <p class="fw-medium text-white-75">
              Betty Kelley &middot; 16 min
            </p>
          </div>
        </a>
        <!-- END Story #10 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #11 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo22.jpg');" href="javascript:void(0)">
          <div class="block-content bg-black-50">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-success fw-bold p-2 text-uppercase">
                  Coding
                </span>
              </p>
              <p class="fs-sm">
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-white-50"></i> 789
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-white-50"></i> 22
                </span>
                <span class="text-white fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-white-50"></i> 14
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold text-white mb-1">
              How to build your next project
            </p>
            <p class="fw-medium text-white-75">
              Thomas Riley &middot; 32 min
            </p>
          </div>
        </a>
        <!-- END Story #11 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #12 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo9.jpg');" href="javascript:void(0)">
          <div class="block-content bg-white-90">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-primary fw-bold p-2 text-uppercase">
                  Travel
                </span>
              </p>
              <p class="fs-sm ">
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-black-25"></i> 400
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-black-25"></i> 89
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-black-25"></i> 44
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold mb-1 text-black">
              Exploring the forest in the mist
            </p>
            <p class="fw-semibold text-black-50">
              Carol White &middot; 12 min
            </p>
          </div>
        </a>
        <!-- END Story #12 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #13 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo11.jpg');" href="javascript:void(0)">
          <div class="block-content bg-white-90">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-danger fw-bold p-2 text-uppercase">
                  Inspiration
                </span>
              </p>
              <p class="fs-sm">
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-black-25"></i> 400
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-black-25"></i> 89
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-black-25"></i> 44
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold text-black mb-1">
              Building successful web apps
            </p>
            <p class="fw-semibold text-black-50">
              Lori Moore &middot; 16 min
            </p>
          </div>
        </a>
        <!-- END Story #13 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Story #14 -->
        <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo22.jpg');" href="javascript:void(0)">
          <div class="block-content bg-white-90">
            <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
              <p>
                <span class="badge bg-success fw-bold p-2 text-uppercase">
                  Coding
                </span>
              </p>
              <p class="fs-sm">
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-eye text-black-25"></i> 400
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-heart text-black-25"></i> 89
                </span>
                <span class="text-black-75 fw-semibold me-1">
                  <i class="fa fa-fw fa-comments text-black-25"></i> 44
                </span>
              </p>
            </div>
            <p class="fs-lg fw-bold text-black mb-1">
              How to build your next project
            </p>
            <p class="fw-semibold text-black-50">
              Lisa Jenkins &middot; 32 min
            </p>
          </div>
        </a>
        <!-- END Story #14 -->
      </div>
      <div class="col-lg-4">
        <!-- Story #15 -->
        <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
          <img class="img-fluid" src="media/photos/photo21@2x.jpg" alt="">
          <div class="block-content">
            <h4 class="mb-1">Get things done</h4>
            <p class="fs-sm">
              <span class="text-primary">Marie Duncan</span> on March 30, 2019 · <span class="text-muted">9 min</span>
            </p>
            <p>
              Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
            </p>
          </div>
        </a>
        <!-- END Story #15 -->
      </div>
      <div class="col-lg-4">
        <!-- Story #16 -->
        <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
          <img class="img-fluid" src="media/photos/photo13@2x.jpg" alt="">
          <div class="block-content">
            <h4 class="mb-1">What to do in the night market</h4>
            <p class="fs-sm">
              <span class="text-primary">Marie Duncan</span> on March 24, 2019 · <span class="text-muted">8 min</span>
            </p>
            <p>
              Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
            </p>
          </div>
        </a>
        <!-- END Story #17 -->
      </div>
      <div class="col-lg-4">
        <!-- Story #18 -->
        <a class="block block-rounded block-link-pop h-100 mb-0" href="javascript:void(0)">
          <img class="img-fluid" src="media/photos/photo23@2x.jpg" alt="">
          <div class="block-content">
            <h4 class="mb-1">Work &amp; Travel</h4>
            <p class="fs-sm">
              <span class="text-primary">Susan Day</span> on March 21, 2019 · <span class="text-muted">14 min</span>
            </p>
            <p>
              Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet....
            </p>
          </div>
        </a>
        <!-- END Story #18 -->
      </div>
    </div>
    <!-- END Cover Link Stories -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection
