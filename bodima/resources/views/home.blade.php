@extends('layouts.app')

@section('title', 'Home Page')

@push('styles')
<style>
    .hello { color: blue; }
</style>
@endpush

@section('content')
    <div id="hero" class="col-12 min-vh-100 text-center align-items-center">
        <img src="{{ asset('images/img.jpeg') }}" alt="Hero Image" style="width:100%; height:100%; position:absolute; z-index:-1; object-fit:cover; opacity:0.7;">
        <h1 class="hero-text">Welcome Thibirigasyaya Our Boarding House</h1>
        <h3 style="padding-top: 50px; color: #efe0e0;">This is Our place</h3>

    </div>
    <div class="container">
        <h1><b>Come and see our house</b></h1>
        <a id="b1" type="button" name="location" href="https://goo.gl/maps/kKGUKsnm9VLVcoRg8" class="btn">Location</a>
    </div>
@endsection

@push('scripts')
<script>
    console.log("Home Page Loaded");
</script>
@endpush
