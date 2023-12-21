<?php include("modules/registerAndLogin.php")?>
    <!--sign up box-->
    <div class="container">
        <h1>Sign up</h1>
        <form action="home.php" method="post">
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
                <input type="text" class="form-control" name="comPass" placeholder="Comfirm Password">
            </div>
            <div class="group">
                
                <input type="submit" class="btn btn-primary" value="Register" name="submit">      
                    If you already have an account? <a href="login.php">Login</a>
            
            </div>
        </form>

    </div>
    
</body>
</html>