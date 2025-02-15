@extends('layout')

@section('content')
<div class="w-[60%] h-[20vh] rounded-full flex items-center justify-center ml-auto mr-auto mt-60 bg-pink-500">
    <p class="font-semibold text-[60px] text-yellow-100  ">Welcome to my website</p>
</div>
@if (session('role'))
<script>
    alert("{{session('role')}}");
</script>
@endif
@endsection