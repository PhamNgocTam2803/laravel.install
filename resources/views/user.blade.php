@extends('layout')

@section('title', 'Admin')

@section('content')

<div class="w-[60%] h-[20vh] rounded-full flex items-center justify-center ml-auto mr-auto mt-60 bg-pink-500">
    <p class="font-semibold text-[40px] text-yellow-100  text-center">Welcome User, you can only access User </p>
</div>
@if (session('role'))
<script>
    alert("{{session('role')}}");
</script>
@endif
@endsection