<?php   
    $error=array();
        if(isset($_POST["login"])) {

            $email=$_POST["email"];
            $password=md5($_POST["password"]);

            $sql = "SELECT * FROM user WHERE email='$email'";
            $sqlAdmin="SELECT * FROM admin WHERE email='$email'";
            $result = mysqli_query($con,$sql);
            $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($user){
                
                if($password==$user["password"]){
                    header("location: http://localhost:3000/User/home.php");
                    die("process complete but is not right");
                }
                else{
                    array_push($error,"Password does not match");
                };
            }
            else{
                array_push($error,"Email does not match");
            }
        }
?>