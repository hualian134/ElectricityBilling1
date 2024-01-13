<?php 
        if(isset($_POST["login"])) {

            $email=$_POST["email"];
            $password=($_POST["password"]);

            $sql = "SELECT * FROM admin WHERE email='$email'";
            $result = mysqli_query($con,$sql);
            $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($user){
                
                if($password==$user["password"]){
                    header("Location : index.php");
                    die();
                }
                else{
                    echo "<div class='alert alert-danger'>Password does not match!</div>";
                };
            }
            else{
                echo"<div class='alert alert-danger'>Email does not match!</div>";
            }
        }
?>