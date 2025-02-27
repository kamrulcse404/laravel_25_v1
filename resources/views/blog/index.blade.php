@extends('layout.app')

@section('title')
    My Blogs
@endsection

@section('nav')
    This is Navbar
@endsection

@section('sidebar')
    This is sidebar
@endsection

@section('content')
    This is the main content of my website.
    <h1>{{ $name }}</h1>
    <h2>{{ $company }}</h2>

    @datetime(1737892814)

    @admin('admin')
        <h1>Hello Md. Kamrul Hasan</h1>
    @endadmin

    @editor('editor')
        <h1>Hello Farjana</h1>
    @endeditor


@endsection

@push('blog_styles')
    <link rel="stylesheet" href="style1.css">
@endpush

@push('blog_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     alert("Page has loaded successfully!");
        // });
    </script>
@endpush
