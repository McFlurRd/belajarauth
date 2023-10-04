@extends('layout')

@section('content')
    <h1>Login</h1>
    <hr>
    @if(session()->get('error'))
    <div style="background: red; color: white">
        {{ session('error') }}
    </div>
    @endif
    <form action="/login" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email"/>
            @error('email') {{ $message }} @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password"/>
            @error('password') {{ $message }} @enderror
        </div>

        <button type="submit">Login</button>
    </form>
@endsection