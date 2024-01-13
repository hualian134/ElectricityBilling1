<?php include("modules/registerAndLogin.php")?>
    <!--sign up box-->
    <div class="container">
        <h1>Sign up</h1>
        <?php 
    if(isset($_POST["submit"])){
        $name=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $password2=$_POST["comPass"];
        $error=array();

        if(empty($name) OR empty($password) OR empty($email) OR empty($password2) ){
            array_push($error,"Fill all field");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($error,"Email is not valid");
        }
        if(strlen($password<5)){
            array_push($error,"Password must be at least 5 charaters long ");
        }
        if($password!==$password2){
            array_push($error,"Password not match");
        }

        if(count($error)>0){
            foreach($error as $msg){
                echo "<div class='alert alert-danger'>$msg</div>";
            }
        }
        else{

         }
    }
?>
        
        <form action="signup.php" method="post">
            <div class="group">
                <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
            <div class="group">
                <input type="text" class="form-control" name="email" placeholder="example@gmail.com">
            </div>
            <div class="group">
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="group">
                <input type="text" class="form-control" name="comPass" placeholder="ConfirmPassword">
            </div>
            <div class="group">
                
                <input type="submit" class="btn btn-primary" value="Register" name="submit">      
                    If you already have an account? <a href="login.php">Login</a>
            
            </div>
        </form>

    </div>
    
</body>
</html>
