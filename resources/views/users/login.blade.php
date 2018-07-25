@extends('layouts.master')

@section('content')
<div class="login-container">
    <form class="login">
    <h2 class="white"> Login to system</h2>
    <div class="grid-container">
        <div class="grid-x grid-padding-x login-inner">
        <div class="medium-12 cell">
            <label>Username
            <input type="text" placeholder="John Doe">
            </label>
        </div>
        <div class="medium-12 cell">
            <label>Password
            <input type="password" placeholder="******">
            </label>
        </div>
        </div>
        <a class="button">Login</a>
    </div>
    </form>
</div>
@endsection