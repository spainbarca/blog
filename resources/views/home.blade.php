{{-- @extends('layouts.simple')


@section('content')
  <!-- Hero -->
  <div class="bg-image my-2" style="background-image: url('media/photos/photo12@2x.jpg');">
    <div class="bg-gd-white-op-r">
      <div class="content py-6">
        <h3 class="text-black-75 text-center text-sm-end mb-0">
          Mis Blogs
        </h3>
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
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
            <div class="block-content pb-10 bg-image" style="background-image: url('media/photos/photo23@2x.jpg');">
              <span class="badge bg-danger fw-bold p-2 text-uppercase">
                {{$post->category->name}}
              </span>
            </div>
            <div class="block-content">
                <h4 class="mb-1">{{ $post->title }}</h4>
                <p class="fs-sm">
                  <span class="text-primary">Susan Day</span> {{$post->published_at->format('M d')}} · <em class="text-muted">13 min</em>
                </p>
                <p>
                  {{$post->except}}
                </p>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <div class="row g-0 fs-sm text-center">
                  <div class="col-4">
                    <span class="text-muted fw-semibold">
                      <i class="fa fa-fw fa-eye opacity-50 me-1"></i> 890
                    </span>
                  </div>
                  <div class="col-4">
                    <span class="text-muted fw-semibold">
                      <i class="fa fa-fw fa-heart opacity-50 me-1"></i> 56
                    </span>
                  </div>
                  <div class="col-4">
                    <span class="text-muted fw-semibold">
                      <i class="fa fa-fw fa-comments opacity-50 me-1"></i> 14
                    </span>
                  </div>
                </div>
            </div>

            <div class="block-content block-content-full block-content-sm bg-dark bg-gradient fs-sm">
                <div class="d-flex bd-highlight ">
                    <div class="me-auto bd-highlight">
                        <button type="button" class="btn btn-sm btn-alt-primary me-1 mb-0">
                        <i class="fa fa-fw fa-eye me-1"></i> Read More
                        </button>
                    </div>
                    <div class="bd-highlight">
                        <div class="btn-group" role="group" aria-label="Horizontal Alternate Secondary">
                            @foreach ($post->tags as $tag)
                                <button type="button" class="btn btn-sm btn-alt-secondary text-sm">#{{ $tag->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
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
@endsection --}}
