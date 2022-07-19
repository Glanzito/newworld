
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>
    
        <form action="includes/signup.inc.php" method="post">
            <h3>sign up</h3>
            <span>name</span>
            <input type="name" name="name" class="box" placeholder="enter your name" id="" required>
            <span>surname</span>
            <input type="surname" name="surname" class="box" placeholder="enter your surname" id="" required>
            <span>email</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="" required>
            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="" required>
            <div class="checkbox">

                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" name = "submit" class="btn">
  
            <p>already have an account ? <a href="login.html" >log in</a></p>
        </form>
    
    </div>
 
    
</body>
</html>