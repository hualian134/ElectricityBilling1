<?php include("../config/connect.php");
 include("modules/loginFunction.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <!--sign up box-->
    <div class="container">
        <h1>Login</h1>
        <?php
            if(isset($error)){
                foreach($error as $msg){
                    echo "<div class='alert alert-danger'>$msg</div>";
                }
            }?>
        <form action="login.php" method="post">
           
            <div class="group">
             
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
        
                </div>
           
            <div class="group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        
            <div class="group">
                <input type="submit" class="btn btn-primary"  value="Login" name="login">        
                
            </div>
        </form>

    </div>
    
</body>
</html>