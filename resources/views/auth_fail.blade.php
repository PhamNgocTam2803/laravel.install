@extends('layout')

@section('content')
<!-- <div>
    @if (isset($auth_fail)) 
        <h1 class="border text-[50px] mt-70 mr-auto ml-auto w-[80vw] h-[20vh] flex items-center justify-center bg-red-700 text-white">
            {{$auth_fail}}
        </h1>
    @endif
</div> -->
<div>
    <h1 class="border text-[50px] mt-[200px] mx-auto w-[80vw] h-[250px] flex items-center justify-center text-center bg-red-700 text-white">
        Only authenticated user may access this route.<br>
        You have to login first!!<br>
        If you do not have an account. Please sign up!!
    </h1>
</div>
@endsection