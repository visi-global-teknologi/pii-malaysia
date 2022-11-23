@extends('layouts.upconstruction.master')

@section('css')
@endsection

@section('content')
@include('homepage.slider', $data)
<main id="main">
    @include('homepage.member', $data)
    @include('homepage.emagazine', $data)
</main>
@endsection

@section('bottom')
    @include('layouts.upconstruction.footer', $data)
@endsection

@section('script')
@endsection
