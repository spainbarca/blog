@extends('layouts.simple')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script>
        Dashmix.helpersOnLoad(['jq-magnific-popup']);
    </script>
@endsection

@section('content')
    <!-- Hero -->

    <main id="main-container">
        <div class="bg-image" style="background-image: url('../media/photos/photo22@2x.jpg');">
            <div class="bg-black-75">
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <p>
                        <span class="badge bg-primary fw-bold p-2 mt-3 ms-4 text-uppercase">
                            {{$post->category->name}}
                        </span>
                    </p>
                    <p class="fs-sm">
                        <span class="text-white fw-semibold me-4 mt-3">
                            <i class="fa fa-fw fa-calendar-check text-white-50"></i> {{ $post->published_at->format('M d') }}
                        </span>
                    </p>
                </div>
                <div class="content content-top content-full text-center">
                    <h1 class="fw-bold text-white mb-3">
                        {{ $post->title }}
                    </h1>
                    <h2 class="h3 fw-normal text-white-75 mb-5">{{ $post->excerpt }}</h2>
                    <p>
                        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 me-2 m-1">
                            <i class="fa fa-user-circle me-1"></i> by Noah
                        </span>
                        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-1">
                            <i class="fa fa-clock me-1"></i> 10 min read
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="content content-full">
            <div class="row justify-content-center">
                <div class="col-sm-8 py-5">
                    <article class="js-gallery story js-gallery-enabled">
                        {!!$post->body!!}
                    </article>
<br>
                    <div class="d-flex justify-content-end bd-highlight mb-3">
                        <div class="btn-group" role="group" aria-label="Horizontal Alternate Secondary">
                            @foreach ($post->tags as $tag)
                                <button type="button" class="btn btn-sm btn btn-outline-secondary text-sm">#{{ $tag->name }}</button>
                            @endforeach
                        </div>
                      </div>
                    @include('partials.disqus-script')
                </div>

            </div>
        </div>
    </main>
    <!-- END Hero -->
    <!-- END Main Container -->
@endsection