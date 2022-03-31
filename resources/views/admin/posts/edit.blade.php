@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <style>
        .cke {
            visibility: hidden;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/skins/moono-lisa/editor.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/scayt/dialogs/dialog.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/tableselection/styles/tableselection.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/dialog/styles/dialog.css') }}">

    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" referrerpolicy="no-referrer" />
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/config.js?t=LAHF') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/lang/en.js?t=LAHF') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/styles.js?t=LAHF') }}"></script>

    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-validation/additional-methods.js') }}"></script>
    <script src="{{ asset('js/pages/be_forms_validation.min.js') }}"></script>

    <script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"> </script>

    <script>
        Dashmix.helpersOnLoad(['jq-notify', 'js-flatpickr', 'jq-datepicker', 'jq-select2']);
    </script>

    <script>
        Dashmix.onLoad(function() {
            CKEDITOR.config.height = '450px';
            Dashmix.helpers(['js-ckeditor']);
        });
    </script>

    <script>
        $(".js-select2").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>

    <script>
        var myDropzone = new Dropzone('.dropzone', {
            url: '/admin/posts/{{ $post->url }}/photos',
            acceptedFiles: 'image/*',
            maxFilesize: .5,
            maxFiles: 5,
            paramName: 'photo',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }, 
            dictDefaultMessage: 'Arrastra las fotos aquí para subirlas',
        });

        myDropzone.on('error', function(file, res){
            var msg = res.photo[0];
            $('.dz-error-message > span').text(msg);
        });

        Dropzone.autoDiscover=false;
    </script>
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">New Blog Post</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">New</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

    <div class="content content-full">
        <form class="js-validation" action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-8">
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <a class="btn btn-alt-secondary" href="be_pages_blog_post_manage.html">
                                <i class="fa fa-arrow-left me-1"></i> Manage Posts
                            </a>
                            <div class="block-options">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="" id="dm-post-add-active"
                                        name="dm-post-add-active">
                                    <label class="form-check-label" for="dm-post-add-active">Set active</label>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center push">
                                <div class="col-md-10">
                                    <div class="mb-4">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter a title.." value="{{old('title', $post->title)}}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="excerpt">Excerpt</label>
                                        <textarea class="form-control" id="excerpt" name="excerpt" rows="3"
                                            placeholder="Enter an excerpt..">{{old('excerpt', $post->excerpt)}}</textarea>
                                        <div class="form-text">Visible on blog post list as a small description of the
                                            post.
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                                        <!-- For more info and examples you can check out http://ckeditor.com -->
                                        <label class="form-label">Body</label>
                                        <textarea id="js-ckeditor" name="body">{{old('body', $post->body)}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex flex-column">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                            <a class="fw-medium" href="javascript:void(0)">
                                Select options
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                        <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">

                            <div class="col-md-11">
                                <div class="mb-4">
                                    <label class="form-label" for="published_at">Date Published</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary btn-icon" (click)="d.toggle()">
                                                <i class="fa-solid fa-calendar-lines-pen"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="js-flatpickr form-control" id="published_at"
                                        name="published_at" placeholder="d-m-Y" data-date-format="d-m-Y" value="{{old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : null)}}">
                                   </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="category">Category <span
                                            class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="category" name="category"
                                        style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{old('category', $post->category_id) == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="tags">Select2 Multiple <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-select" id="tags" name="tags[]" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                      <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach ($tags as $tag)
                                            <option {{collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>

                    </div>
                    <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                            <a class="fw-medium" href="javascript:void(0)">
                                Select images
                                <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                            </a>
                        </div>
                        <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                            <div class="w-100">
                                <!-- <div class="item rounded-3 bg-body mx-auto my-3">
                                    <i class="fa fa-archive fa-lg text-primary"></i>
                                </div>
                                <div class="fs-1 fw-bold">75</div>
                                <div class="text-muted mb-3">Products out of stock</div>
                                <div
                                    class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                                    5% of portfolio
                                </div>
                                <button type="button" class="js-notify btn btn-alt-success push" data-type="success" data-icon="fa fa-check me-1" data-message="App was updated successfully to 1.2 version">
                                    <i class="fa fa-bell me-1 opacity-50"></i> Launch Notification
                                  </button> -->
                                <div class="dropzone">

                                </div>
                            </div>
                        </div>
                        <div class="block-content bg-body-light">
                            <div class="row justify-content-center push">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-fw fa-check opacity-50 me-1"></i> Create Post
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
