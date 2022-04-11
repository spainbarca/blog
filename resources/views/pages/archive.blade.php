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
Archive
@endsection
