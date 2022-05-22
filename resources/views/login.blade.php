<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="{{ asset('/css/login.css') }}" rel="stylesheet">

    <!--  **FUENTES ICONOS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
        <form action="" class="login">
            <h1 class="login_title">customer login</h1>
            
            <div class="email">
                <img class="email_icon"src="./img/email_new.png" alt="">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="border_bottom_email"></div>

            <div class="pass">
                <img class="pass_icon"src="./img/padlock.png" alt="">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="border_bottom_pass"></div>
            
            <div>
                <div class="options">
                    <div class="check_remember">
                        <input type="checkbox" name="Remember_me">
                        <label for="Remember_me">Remember me</label>
                    </div>
                    <a class="forgot_pass" href="#" >Forgot password?</a>
                </div>
            </div>

            <div class="button_login">
                <button class="submit">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>