@extends('layouts.master')
@section('title')
    404
@endsection
@section('links')
@endsection
@section('content')
<section id="404" style="height:400px;display:flex;align-items:center;justify-content: center">
    <h1 style="text-align:center">Упс <span style="font-size: 40px;font-weight:bolder">404</span>, старница не найдено!</h1>
</section>
@include('partials.footer')
@endsection
@section('scripts')
<script src="{{URL::to('/js/custom.js')}}"></script>
@endsection
