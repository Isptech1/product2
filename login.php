<?php include 'connection.php';
if(isset($_SESSION['username'])){
  session_destroy();
}
else{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12" id="reg">
        <div class="aa-myaccount-area">         
         <div class="aa-myaccount-register">
            <div class="header">
              <h2>Login</h2>
            </div>
                <div class="main">
                  <form action="" class="aa-login-form" method="post">
                     <label for=""> Email address<span>*</span></label>
                       <input type="text" placeholder="Username or email" name="email" required>
                     <label for="">Password<span>*</span></label>
                     <input type="password" placeholder="Password" name="user_password" id="password" required>
                      <span class="eye" onclick="myfunction()">
                       <i id="hide1" class="fa fa-eye"></i>
                       <i id="hide2" class="fa fa-eye-slash"></i>
                      </span><br> 
                     <button type="submit" class="aa-browse-btn" name="submit">Login</button>
                     <!--<label class="rememberme" for="rememberme">
                      <input type="checkbox" id="rememberme"> Remember me </label>-->
                    <div class="lost"> 
                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
</section>

<script src="script.js"></script>   
    


  <script>
    function myfunction(){
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
            x.type = "text";
            y.style.display = block;
            z.style.display = none;
        }
        else{
            x.type = "password";
            y.style.display = none;
            z.style.display = block;
        }
    }
  </script>


<?php      
if(isset($_POST['submit']))
{
    // include('connection.php');  
    $user = $_POST['email'];  
    $pswd = $_POST['user_password'];
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);  
        $pswd = stripcslashes($pswd);  
        $user = mysqli_real_escape_string($conn, $user);  
        $pswd = mysqli_real_escape_string($conn, $pswd);    
        $sql = "select * from login WHERE username='$user' AND password='$pswd' ";  
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
         
        if($count == 1){  
            $_SESSION['username']=$user;
            $_SESSION['password']=$pswd;
            echo "<script>window.location.href='product.php';</script>";
        }  
        else{
          echo "<script>
          alert('Login failed. Invalid username or password.');
          window.location.href='login.php';
        </script>";
            
            // echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
}
?>
</body>
</html>


