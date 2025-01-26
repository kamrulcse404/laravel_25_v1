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
    This is main content of my web side.
@endsection


@section('styles')
    @parent
    <link rel="stylesheet" href="style1.css">
@endsection
