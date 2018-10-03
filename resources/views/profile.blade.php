@extends('layouts.default')

@section('nav')
    <a href="/" class="nav-btn">
        Logout
    </a>
@stop

@section('content')
<div>
    <div class="banner-profile">
        <img class="img" src="/img/banner.jpg">
        <a href="/" >
            User Profile
        </a>
    </div>
    
    <form class="profile-form" method="POST" action="{{ route('users.update', $user->id )}}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" value="{{ $user->surname }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <button>Submit</button>
        </div>       
    </form>
</div>

@stop