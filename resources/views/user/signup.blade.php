@extends('layouts.master')
@section('title')
    Регистрация
@endsection
@section('links')
<link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
@endsection
@section('content')
<header id="signin">
    @include('partials.header')
</header>
<section id="userSignin">
<form action="javascript:void(0)">
    <div class="form-inner">
        <input type="text" placeholder="*Имя" id="signupName">
        <input type="text" placeholder="*Email" id="signupEmail">
        <input type="password" placeholder="*Пароль" id="signupPassword">
        <input type="text" placeholder="*Адресс" id="signupAddress">
        <input type="text" placeholder="*Телефон" id="signupPhoneNumber">
        <button id="signupBtn">Зарегистрироваться</button>
    </div>
</form>
</section>
@include('partials.footer')
@endsection
@section('scripts')
<script src="{{URL::to('/js/custom.js')}}"></script>
@endsection
