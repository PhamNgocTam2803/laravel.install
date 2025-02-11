<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        input {
            border-radius: 10px;
            background-color: white;
            height: 30px;
            color: orangered;
            font-size: 1.2rem;
        }

        button {
            margin: 20px auto;
            width: 10%;
            position: absolute;
            left: 45%;
            height: 30px;
            border-radius: 10px;
            background-color: lightsalmon;
            color: black;
        }

        .re_password {
            margin: 50px auto;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center">Sign Up Form</h1>
    <form id="signup-form" action="/sign-up/request" method="POST" style="margin: 20px auto; width: 50vw; font-size: 1.5rem">
        @csrf
        <div style="margin: 30px auto; width: 42vw">
            <div class="username" style="margin: 50px auto">
                <label for="username">Enter your username: </label>
                <input id="username" name="username" type="text" placeholder="username here" require>
            </div>
            <div class="password">
                <label for="password">Enter your password: </label>
                <input id="password" name="password" type="password" placeholder="enter password" require>
            </div>
            <div class="re_password">
                <label for="password">Enter your password again: </label>
                <input id="re-password" name="re-password" type="password" placeholder="enter password again" require>
            </div>
        </div>
        <!--  Button -->
        <button id="submit" type="submit">SIGN UP</button>
        <!-- Thông báo từ server trả về -->
        <div class="message">
            @if (isset($message))
            <script>
                alert("{{$message}}");
            </script>
            @endif
        </div>
    </form>
</body>
<script>
    const submit = document.getElementById('signup-form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const re_password = document.getElementById('re-password');

    submit.addEventListener("submit", function(event) {
        if (!username.value || !password.value || !re_password.value) {
            event.preventDefault();
            alert('Cần điều đầy đủ thông tin trước khi gửi form');
            return;
        }
        if (password.value !== re_password.value) {
            event.preventDefault();
            alert('Bạn cần kiểm tra lại mật khẩu vì chúng không khớp nhau');
            password.value = '';
            re_password.value = '';
            return;
        }
    })
</script>

</html>