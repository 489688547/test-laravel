@extends('layouts.default')

@section('content')
<div class="content-login">
    <img class="banner-home" src="/img/banner.jpg">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        
        <div class="form-group">
            <input name="email" placeholder="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input name="password" placeholder="password" value="{{ old('password') }}">
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>       
    </form>
</div>

@stop