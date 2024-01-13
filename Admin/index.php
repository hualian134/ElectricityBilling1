<?php include("../config/connect.php");
include("sub/login.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<div class="container">
        <h1>Login</h1>
        <?php ?>
        <form action="adminLogin.php" method="post">
           
            <div class="group">
                <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
            </div>
            <div class="group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        
            <div class="group">
                <input type="submit" class="btn btn-primary" value="Login" name="login">        
                Forget Password?
            </div>
        </form>

    </div>
    
</body>
</html>