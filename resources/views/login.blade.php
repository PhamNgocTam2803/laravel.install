@extends('layout')

@section('title', 'Login Page')

@section('content')
<form class="signUpForm bg-orange-100  border border-solid rounded-[1.5vw] w-100 h-100 mr-auto ml-auto mt-30" action="/login/request" method="POST">
    @csrf
    <h1 class="text-center font-bold text-[30px] m-1">Login</h1>
    <div class="user_input w-100 h-60 flex flex-col items-center justify-evenly">
        <div class="w-70"><input class="border-3  outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('email') border-red-500 bg-red-50 @enderror" id="email" name="email" type="email" placeholder="Email" required value="{{old('email')}}">
            @error('email')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('password') border-red-500 bg-red-50 @enderror" id="password" name="password" placeholder="Password" type="password" required value="{{old('password')}}">
            @error('password')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <x-btn_hint btnName='Login' question="Don't have an account?" hint='Sign Up' uri='/sign-up' />
    </div>

    <x-form_footer text='Login with Google' />
</form>
@endsection