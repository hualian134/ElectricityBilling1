<?php 
     $error=array();
        if(isset($_POST["login"])) {

            $email=$_POST["email"];
            $password=($_POST["password"]);

            $sql = "SELECT * FROM admin WHERE email='$email'";
            $result = mysqli_query($con,$sql);
            $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($user){
                
                if($password==$user["password"]){
                    header("Location : home.php");
                    die();
                }
                else{
                   array_push($error,"Password does not match!");
                };
            }
            else{
                array_push($error,"Email does not match!");
            }
        }
?>