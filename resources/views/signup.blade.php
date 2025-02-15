@extends('layout')

@section('title', 'Sign Up Page')

@section('content')
<form id="signUpForm" class="bg-orange-100 border rounded-[1.5vw] w-100 h-210 mr-auto ml-auto mt-15" action="/sign-up/request" method="POST">
    @csrf
    <h1 class="text-center font-bold text-[30px] m-1">Sign up</h1>
    <div class="user_input w-100 h-170 flex flex-col items-center justify-evenly">
        <div class="w-70"><input class="border-3 rounded-[0.3vw] outline-none focus:border-sky-500 w-70 h-9 @error('fname') border-red-500 bg-red-50 @enderror" id="fname" name="fname" placeholder="First name" type="text" required value="{{old('fname')}}">
            @error('fname')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('lname') border-red-500 bg-red-50 @enderror" id="lname" name="lname" placeholder="Last name" type="text" required value="{{old('lname')}}">
            @error('lname')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3  outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('email') border-red-500 bg-red-50 @enderror" id="email" name="email" type="email" placeholder="Email" required value="{{old('email')}}">
            @error('email')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('birth_day') border-red-500 bg-red-50 @enderror" id="birth_day" name="birth_day" placeholder="Birth Day" type="date" required value="{{old('birth_day')}}">
            @error('birth_day')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('phone_number') border-red-500 @enderror" id="phone_number" name="phone_number" placeholder="Phone number" type="number" required value="{{old('phone_number')}}">
            @error('phone_number')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('password') border-red-500 bg-red-50 @enderror" id="password" name="password" placeholder="Password" type="password" required value="{{old('password')}}">
            @error('password')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <div class="w-70"><input class="border-3 outline-none focus:border-sky-500 w-70 h-9 rounded-[0.3vw] @error('password_confirmation') border-red-500 bg-red-50 @enderror" id="confirm_password" name="password_confirmation" placeholder="Confirm password" type="password" required value="{{old('password_confirmation')}}">
            @error('password_confirmation')<p class="text-red-500 text-sm mt-1">{{$message}}</p>@enderror
        </div>
        <x-btn_hint btnName='Sign Up' question='Already have an account?' hint='Login' uri='/login' />
    </div>
    <x-form_footer text='Sign up with Google' />
</form>
<!-- <div>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <ul>
        <li>{{$error}}</li>
    </ul>
    @endforeach
    @endif
</div> -->
<div>
    @if (isset($mess))
    <script>
        alert("{{$mess}}")
    </script>
    @endif
</div>
<script>
    const form = document.getElementById('signUpForm');
    const pw = document.getElementById('password');
    const cf_pw = document.getElementById('confirm_password');

    function validatePassword(event) {
        if (pw.value !== cf_pw.value) {
            // if (event.type === "submit") 
            event.preventDefault();
            alert("Your Password and Confirm password is not correct, Please enter again!");
            pw.value = '';
            cf_pw.value = '';
            return;
        }
    }
    // cf_pw.addEventListener('blur', function (event){
    //     validatePassword(event);
    // });
    cf_pw.addEventListener('blur', validatePassword);
    form.addEventListener('submit', validatePassword);

    // cf_pw.addEventListener("blur", function() {
    //     if (pw.value !== cf_pw.value) {
    //         alert("Your Password and Confirm password is not correct, Please enter again!");
    //         pw.value = '';
    //         cf_pw.value = '';
    //         return;
    //     }
    // })

    // form.addEventListener('submit', function(event) {
    //     if (pw.value !== cf_pw.value) {
    //         event.preventDefault();
    //         alert("Your Password and Confirm password is not correct, Please enter again!");
    //         return;
    //     }
    // })
</script>
@endsection