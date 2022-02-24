@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <style>.cke{visibility:hidden;}</style>

    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/skins/moono-lisa/editor.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/scayt/dialogs/dialog.css?t=LAHF') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/tableselection/styles/tableselection.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ckeditor/plugins/dialog/styles/dialog.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->


    <!-- Page JS Code -->
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/config.js?t=LAHF') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/lang/en.js?t=LAHF') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/styles.js?t=LAHF') }}"></script>

    <script>
        Dashmix.onLoad(function() {
            CKEDITOR.config.height = '450px';
            Dashmix.helpers(['js-ckeditor']);
        });
    </script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-16158021-6');</script>
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

    <div class="content content-full content-boxed">
        <form action="be_pages_blog_post_add.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <div class="block">
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
                                <label class="form-label" for="dm-post-add-title">Title</label>
                                <input type="text" class="form-control" id="dm-post-add-title" name="title"
                                    placeholder="Enter a title..">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="dm-post-add-excerpt">Excerpt</label>
                                <textarea class="form-control" id="dm-post-add-excerpt" name="excerpt"
                                    rows="3" placeholder="Enter an excerpt.."></textarea>
                                <div class="form-text">Visible on blog post list as a small description of the post.
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-6">
                                    <label class="form-label" for="dm-post-add-image">Featured Image</label>
                                    <input class="form-control" type="file" id="dm-post-add-image">
                                </div>
                            </div>
                            <div class="mb-4">
                                <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                                <!-- For more info and examples you can check out http://ckeditor.com -->
                                <label class="form-label">Body</label>
                                <textarea id="js-ckeditor" name="body"></textarea>
                              </div>
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
        </form>
    </div>
@endsection
