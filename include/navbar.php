<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>

<div class="overflow"></div>
<nav class="navbar">
    <div class="login-signup">
                <button class="loginform-btn">Login</button>
    </div>
    <div class="nav-list">
        <a href="home.php" class="nav-item">Home</a>
        <a href="" class="nav-item">Genre</a>
        <a href="" class="nav-item">About us</a>
        <a href="" class="nav-item">List Anime</a>
    </div>
</nav>
<div id="login-form" class="login-page">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button class="toggle-btn login-btn">Login</button>
            <button class="toggle-btn register-btn">Register</button>
        </div>
        <form id='login' class='input-group-login'>
            <input type='text' class='input-field' placeholder='Email Id' required>
            <input type='password' class='input-field' placeholder='Enter Password' required>
            <input type='checkbox' class='check-box'><span>Remember Password</span>
            <button type='submit' class='submit-btn'>Log in</button>
        </form>
        <form id="register" class='input-group-register'>
            <input type='text' class='input-field' placeholder='First Name' required>
            <input type='text' class='input-field' placeholder='Last Name ' required>
            <input type='email' class='input-field' placeholder='Email Id' required>
            <input type='password' class='input-field' placeholder='Enter Password' required>
            <input type='password' class='input-field' placeholder='Confirm Password' required>
            <input type='checkbox' class='check-box'><span>I agree to the terms and                                                   conditions</span>
            <button type='submit' class='submit-btn'>Register</button>
        </form>
    </div>
</div>