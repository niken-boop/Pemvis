<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login &  Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
  body {
    background: #edb9d4ff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: 'Poppins', sans-serif;
}
.card {
    width: 360px;
    background: rgba(255, 255, 255, 0.25);
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(255, 100, 150, 0.3);
    backdrop-filter: blur(15px); /*efek blur backgroung*/
    -webkit-backdrop-filter: blur(15px); /*untuk safari*/
    border: 1px solid rgba(255,255,255, 0.3);
    overflow: hidden;
}
.tabs {
    display: flex;
    background: #ffb6c1;
}
.tabs button {
    flex: 1;
    background: transparent;
    border: none;
    padding: 12px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}
.tabs button.active {
    background: #ff69b4;
}
.form-box {
    padding: 30px 25px;
    display: none;
}
.form-box.active {
    display: block;
}
.form-group {
    margin-bottom: 15px;
}
input.form-control, input.from-control {
    height: 38px;
    border-radius: 10px !important;
    font-size: 14px;
    padding: 8px 12px;
}
.btn-pink {
    background: #ff69b4;
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px;
    width: 100%;
    transition: 0.3s;
}
.btn-pink:hover {
    background: #ff8ac0;
}
h4 {
    margin-bottom: 20px;
    text-align: center;
}

        </style>
    </head>

    <body>

        <div class="card">
            <div class="tabs">
                <button id="loginTab" class="active">Login</button>
                <button id="SignUpTab">Sign Up</button>
         </div>

<!--login-->
        <div id="loginBox" class="form-box active">
            <h4 class="text-center mb-4">Welcome Back</h4>
            <form method="post" action="<?php echo site_url('daftar/login'); ?>">
             <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
         </div>
            <div class="form-group">
            <label for="password">Password</label>
             <input type="password" class="form-control" id="password" name="password" required>
            </div>
        <button type="submit" class="btn-pink btn-block">Login</button>
</form>

        </div>

<!--sign up-->
    <div id="signUpBox" class="form-box">  
        <h4 class="text-center mb-4">Create Account</h4>
        <form method="post" action="<?php echo site_url('daftar/signup'); ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="new_username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>  
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="new_password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-pink btn-block">Sign Up</button>
        </form> 
    </div>
</div>

<script> //script untuk toggle tab
    const loginTab = document.getElementById('loginTab');
    const signUpTab = document.getElementById('SignUpTab'); 
    const loginBox = document.getElementById('loginBox');
    const signUpBox = document.getElementById('signUpBox');

loginTab.onclick =() => {
    loginTab.classList.add('active'); 
    signUpTab.classList.remove('active');  
    loginBox.classList.add('active');
    signUpBox.classList.remove('active');
};
signUpTab.onclick =() => {
    signUpTab.classList.add('active');  
    loginTab.classList.remove('active');
    signUpBox.classList.add('active');
    loginBox.classList.remove('active');
};
</script>
</body>
</html>