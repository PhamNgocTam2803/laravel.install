<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, {{$name}}</h1>
    <p>Nghề nghiệp: {{$job}}</p>
    <p>Tuổi: {{$age}}</p>
    <p>Đăng kí composer gì: {{$Composer}}</p>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
</head>

<body>
    <form class="signUpForm bg-orange-100  border border-solid rounded-[1.5vw] w-100 h-210 mr-auto ml-auto mt-30" action="/sign-up/request" method="POST">
        <h1 class="text-center font-bold text-[30px] m-1">Sign up</h1>
        <div class="user_input w-100 h-170 flex flex-col items-center justify-evenly">
            <div class="w-70"><input class="border rounded-[0.3vw] border-solid w-70 h-9" id="fname" name="fname" placeholder="First name" type="text"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="lname" name="lname" placeholder="Last name" type="text"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="email" name="email" type="email" placeholder="Email"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="birth_day" name="birth_name" placeholder="Birth date" type="date"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="phone_number" name="phone_number" placeholder="Phone number" type="text"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="password" name="password" placeholder="Password" type="password"></div>
            <div class="w-70"><input class="border border-solid w-70 h-9 rounded-[0.3vw]" id="confim_password" name="confirm_password" placeholder="Confirm password" type="password"></div>
            <div class="btn w-70 h-9""><button class=" text-center w-70 h-9 bg-blue-400 rounded-2xl">Sign Up</button></div>
            <div class="question " w-70"">
                <p>Already have an account? <a class="text-sky-500" href="/login">Log In</a></p>
            </div>
        </div>

        <div class="line">
            <hr>
        </div>
        <div class="google_wraper">
            <div class="google flex justify-center border border-solid w-70 mt-8 ml-auto mr-auto rounded-[0.5vw]">
                <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" width="40" height="40" alt="google logo">
                <p class="pt-1.5 font-bold">Sign up with Google</p>
            </div>
        </div>
    </form>
</body>

</html>