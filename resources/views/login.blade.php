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
    </style>
</head>

<body>
    <h1 style="text-align: center">Login Page</h1>
    <form action="" method="post" style="margin: 20px auto; width: 50vw; font-size: 1.5rem">
        @csrf
        <div style="margin: 30px auto; width: 40vw">
            <div class="username" style="margin: 50px auto">
                <label for="username">Enter your username: </label>
                <input id="username" name="username" type="text" placeholder="username here">
            </div>
            <div class="password">
                <label for="password">Enter your password: </label>
                <input id="password" name="password" type="password" placeholder="password here">
            </div>
        </div>

        <button type="submit">LOGIN</button>

    </form>
</body>

</html>