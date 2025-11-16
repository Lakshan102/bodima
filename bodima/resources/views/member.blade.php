@extends('layouts.app')

@section('title', 'Home Page')

@push('styles')
<style>
    .hello { color: blue; }
</style>
@endpush

@section('content')
    <div><h1>Members</h1></div>
@endsection

@push('scripts')
<script>
    console.log("Home Page Loaded");
</script>
@endpush
