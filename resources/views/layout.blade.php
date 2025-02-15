<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body class="bg-[#fdf6e3]">
    <nav class="navbar max-w-[1000px] h-[50px] mt-5 mr-auto ml-auto border rounded-2xl flex justify-evenly items-center bg-[#3498db]">
        <a href="/" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Home</a>

        @if (Auth::check())
        <a href="/super_admin_role" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Super Admin</a>
        <a href="/admin_role" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Admin</a>
        <a href="/user_role" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">User</a>
        <a href="/logout" class="rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Logout</a>

        @else
        <a href="/login" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Login</a>
        <a href="/sign-up" class=" rounded-2xl bg-[#ffffff] w-[10%] h-[50%] flex justify-center items-center font-semibold hover:bg-amber-500 text-[#2c3e50]">Sign Up</a>
        @endif
    </nav>

    @yield('content')
</body>

</html>