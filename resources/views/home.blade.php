@extends('layouts.simple')


@section('content')
  <!-- Hero -->
  <div class="bg-image mb-0" style="background-image: url('media/photos/photo21@2x.jpg');">
    <div class="bg-black-50">
      <div class="content content-top content-full text-center">
        <h1 class="fw-bold text-white">
          Check out our latest stories
        </h1>
        <h3 class="fw-normal text-white-75 mb-5">Be inspired and create something amazing today.</h3>
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
      @foreach($posts as $post)
      <div class="col-lg-6 col-sm-12">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
            <div class="block-content pb-10 bg-image" style="background-image: url('media/photos/photo23@2x.jpg');">
              <span class="badge bg-danger fw-bold p-2 text-uppercase">
                Inspiration
              </span>
            </div>
            <div class="block-content">
                <h4 class="mb-1">{{ $post->title }}</h4>
                <p class="fs-sm">
                  <span class="text-primary">Susan Day</span> {{$post->created_at}} <span class="text-muted">14 min</span>
                </p>
                <p>
                  {{$post->except}}
                </p>
              </div>
          </a>
      </div>
      @endforeach
    </div>
    <!-- END Cover Link Stories -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection
