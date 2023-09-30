<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #6B00EF;
        background-attachment: fixed;
       
        height: 100vh;
        font-family: Arial, sans-serif;

        background-size: 100%;

    }

    .container {
        width: 400px;
        margin: 100px auto;

        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgb(255, 255, 255);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #ffffff;
    }

    form {

        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 50px;
    }

    label {
        margin-top: 20px;
        font-weight: bold;
        color: #ffffff;
    }

    input[type="text"],
    input[type="password"] {

        padding: 10px;
        border: none;
        border-bottom: 1px solid #ddd;
        width: 100%;
        font-size: 16px;
        color: #333;
        border-radius: 16px
    }

    button[type="submit"] {
        margin-top: 30px;
        padding: 10px 20px;
        background-color: #05a9f5;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    button[type="submit"]:hover {
        background-color: #ffffff;
        color: #05a9f5;
        border: 1px solid #05a9f5;
    }
</style>

<body>
    <div class="container">
        <h1>Login </h1>
        <form action="" method="post">
            @csrf
            @if (session('info'))
            <div class="alert alert-success" role="alert">
                {{session('info')}}
              </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-success" role="alert">
                gagal coy
              </div>
            @endif
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
