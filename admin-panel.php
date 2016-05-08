<?php
                        //include 'includes/dbconnection.php';
                            require_once("dbconnction.php");
    $db_handle = new DBController();
                        
                        if(isset($_POST['submitbtn'])){
                            
                            $email =$_POST['username'];
                            $password= $_POST['adminpass'];
                            
                         
                            
                             $check_admin="SELECT * FROM admin_login WHERE admin_name='$email' and admin_pas='$password'";
                             
                             $run1=mysqli_query($link,$check_admin);

                             
                             if(mysqli_num_rows($run1)>0){
                                  // echo "<script>window.open('administrator.php','_self')</script>";
                                header('location: administrator.php');
                  
                             }
 else {
                                 echo "<span  style='color:red; text-align: center;'>username and password</span>";
 }
                        }
                        
                ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel :: Burter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    
    
 

        <link rel="stylesheet" href="cssadmin/style.css">

    
    
    
  </head>

  <body>

    <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
          <form action="#" method="post">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          
          <input type="text" name="username" class="login__input name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="adminpass" class="login__input pass" placeholder="Password"/>
        </div>
              <input type="submit" name="submitbtn" class="login__submit" value="Login">
       </form>
      </div>
    </div>
    
  
  </div>
</div>
    

        

  </body>
</html>
