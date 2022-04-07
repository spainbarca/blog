@extends('layouts.simple')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>

    <script>
        Dashmix.helpersOnLoad(['jq-slick']);
    </script>
@endsection


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
        @if (isset($category))
    <h3>Publicaciones de la categoría {{$category->name}}</h3>
@endif
        <!-- Cover Link Stories -->
        <h2 class="content-heading">Cover Link Stories</h2>
        <div class="row items-push">
            <div class="col-md-6 col-xl-4">
                <!-- Story #9 -->
                <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo9.jpg');"
                    href="javascript:void(0)">
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
                <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('media/photos/photo9.jpg');"
                    href="javascript:void(0)">
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
            @foreach ($posts as $post)
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">

                        @if ($post->photos->count() == 1)
                            <div class="block-content pb-10 bg-image"
                                style="background-image: url('{{ $post->photos->first()->url }}');">
                                <span class="badge bg-danger fw-bold p-2 text-uppercase">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                        @elseif ($post->photos->count() > 1)
                            <div class="js-slider slick-nav-black slick-nav-hover" data-dots="false" data-arrows="true"
                                data-slides-to-show="2" data-center-mode="true" data-autoplay="true"
                                data-autoplay-speed="3000">
                                @foreach ($post->photos as $photo)
                                    <div>
                                        <img class="img-fluid" src="{{ url($photo->url) }}" alt=""
                                            style="width: 100%;height: 330px;">
                                    </div>
                                @endforeach
                            </div>
                        @elseif ($post->youtube)
                            <style>
                                .container {
                                    position: relative;
                                    width: 100%;
                                    height: 0;
                                    padding-bottom: 56.25%;
                                }

                                .video {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }

                            </style>
                            <div class="container">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/{{ $post->youtube }}?autoplay=1" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    class="video" allowfullscreen></iframe>
                            </div>
                        @elseif ($post->soundcloud)
                            {!! $post->soundcloud !!}
                        @else
                            <div class="block-content pb-6 bg-image" style="background-image:
                            url('https://www.teahub.io/photos/full/303-3034192_default-banner-banner-jpg.jpg');">
                                <span class="badge bg-danger fw-bold p-2 text-uppercase">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                        @endif

                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-sm-6 col-lg-6 d-flex flex-row">
                                    <h3>{{ $post->title }}</h3>
                                </div>
                                <div class="col-sm-6 col-lg-6 d-flex flex-row-reverse">
                                  <div class="block block-rounded">
                                    <button class="badge bg-danger fw-bold p-2 text-uppercase" onclick="location.href='{{route('categories.show', $post->category)}}';">
                                        {{ $post->category->name }}
                                    </button>
                                  </div>
                                </div>
                              </div>

                            <p class="fs-sm">
                                <span class="text-primary">Susan Day</span> {{ $post->published_at->format('M d') }} ·
                                <em class="text-muted">13 min</em>
                            </p>
                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <div class="row g-0 fs-sm text-center">
                                <div class="col-4">
                                    <span class="text-muted fw-semibold">
                                        <i class="fa fa-fw fa-images opacity-50 me-1"></i> {{ $post->photos->count() }}
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
                                    <button type="button" class="btn btn-sm btn-alt-primary me-1 mb-0"
                                        onclick="location.href='blog/{{ $post->id }}'">
                                        <i class="fa fa-fw fa-eye me-1"></i> Read More
                                    </button>
                                </div>
                                <div class="bd-highlight">
                                    <div class="btn-group" role="group" aria-label="Horizontal Alternate Secondary">
                                        @foreach ($post->tags as $tag)
                                            <button type="button"
                                                class="btn btn-sm btn-alt-secondary text-sm">#{{ $tag->name }}</button>
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
    {!!$posts->links()!!}
    </main>
    <!-- END Main Container -->
@endsection
