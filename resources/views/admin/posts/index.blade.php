@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Manage All Posts</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content content-full">
        <div class="row text-center">
            <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="far fa-2x fa-file-alt text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                {{ $posts->count() }}
                            </p>
                            <p class="text-muted mb-0">
                                All Posts
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="far fa-2x fa-eye text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                140
                            </p>
                            <p class="text-muted mb-0">
                                Active
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="fa fa-2x fa-pencil-alt text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                10
                            </p>
                            <p class="text-muted mb-0">
                                Drafts
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="be_pages_blog_post_add.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="fa fa-2x fa-plus text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                <i class="fa fa-plus text-primary me-1 d-md-none"></i> New Post
                            </p>
                            <p class="text-muted mb-0">
                                by John Doe
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Listado de Posts ({{ $posts->count() }})</h3>
                <button type="button" class="btn btn-alt-success me-1 pull-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Add Post
                </button>

            </div>
            <div class="block-content">
                <table class="table table-striped table-borderless table-vcenter nowrap js-dataTable-buttons">
                    <thead>
                        <tr class="bg-body-dark">
                            <th style="width: 40px;">ID</th>
                            <th style="width: 20%;">Título</th>
                            <th class="d-none d-sm-table-cell">Extracto</th>
                            <th class="d-none d-xl-table-cell 20%;">Categoría</th>
                            <th class="d-none d-xl-table-cell">Publicado</th>
                            <th style="width: 100px;" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    {{ $post->id }}
                                </td>
                                <td>
                                    <i class="fa fa-eye text-success me-1"></i>
                                    <a href="be_pages_blog_story.html">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    {{ $post->excerpt }}
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a href="be_pages_generic_profile.html">{{ $post->category->name }}</a>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    {{ $post->published_at->diffForHumans() }}
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-alt-secondary" href="be_pages_blog_post_edit.html">
                                        <i class="fa fa-fw fa-pencil-alt text-warning"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- END Page Content -->
@endsection
