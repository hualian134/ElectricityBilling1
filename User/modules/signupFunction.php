
    <?php
    if(isset($_POST["submit"])){
        $name=$_POST["username"];
        $password=md5($_POST["password"]);
        $email=$_POST["email"];
        $password2=md5($_POST["comPass"]);
        $error=array();

        if(empty($name) OR empty($password) OR empty($email) OR empty($password2)){
            array_push($error,"Fill all field");
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($error,"Email is not valid");
            }
            if(is_numeric($name)){
            array_push($error,"Invalid user name");
            }
            /*if(strlen($password<5)){
            array_push($error,"Password must be at least 5 charaters long ");
            }*/
            if($password!==$password2){
            array_push($error,"Password not match");
            }
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result=mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount>0){

             array_push($error,"Email already exist");
            
            }
           
        
        else{
            $sql="INSERT INTO user(name,email,password) VALUES (?,?,?) ";
            $stmt = mysqli_stmt_init($con);
            $prepare=mysqli_stmt_prepare($stmt, $sql);
            if($prepare){
                mysqli_stmt_bind_param($stmt,"sss",$name,$email,$password);
                mysqli_stmt_execute($stmt);
                header("location: http://localhost:3000/User/login.php");
                die("page is die");
            }
            else{
                die("Something is wrong.");
            }
         }
    }
}
?>