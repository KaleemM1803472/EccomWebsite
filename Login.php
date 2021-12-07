<?php 
    include "connect.php" ;
    include "functionList.php";
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<head>
    <title>Test</title>
   
    <div class = "navbar">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="index.php">Shop</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Our Stores</a>
            <a href="#">Contact</a>
          </div>
          
          <span>
          <div id="sidenav">
            <button class="openbtn" onclick="openNav()">☰ </button>  
          </div>
            
                <div id="logo-container">
                    <a href="index.php"><img src="coollogo_com-5183982.png" id="logo" height="auto" width="300px" style="margin-left: 175px; margin-right: 98px;"></a>
                </div>
                <input type="text" placeholder="" id="searchbar">
                <button type="submit" id="searchButton"><i class="fas fa-search"></i></button>
                <div id="sidenav" style="float:right">
                    <button id="cart" type="button" onclick="Toggles()" style="font-size: 20px; display: block;"><i class="fas fa-shopping-cart"></i></button>
                    <p id="basketAmount">0</p>
                    <button id="dark" type="button" style="font-size: 20px; display: block;">🌕</button>
                    <a href ="Login.php" style="display: block;" ><button class="openbtn"  type="button" onclick="login()">Sign In</button></a>
                </div>
                </span>
                
          
            
    </div>    


</head>
<!-- <?php 
    
        // session_start();
        
        // $username ="k";
        // $password ="k";

        // if(isset($_POST['Login'])){
        //   Login();
        // }
              
        // if(isset($_POST['username']) && isset($_POST['password'])){
        //   if($_POST['username'] == $username && $_POST['password'] == $password){
        //     $_SESSION['loggedin'] == true;
        //     hearder("location: localhost");
        //   }
        // }
        ?> -->

<body>
    <script type="text/javascript" src="javascript.js"> </script>    
        <div class="mainbody" style=" margin-top:0px;">
          <div id="main-body-container" style="text-align: center;">
        

          <div id="createForm" >
            <div id="slider"class='animated_Right'>
            </div>
            <div id="testContainer">
              <form method="post" action="createAccount.php" id="RegisterForm">
                  <button id="inOrout" onclick="ShowSlider();" ><i class="fas fa-chevron-left"></i></button>
                  <h2 style ="padding: 40px;color: #cacaca;">Sign in</h2>
                <div id="textboxContainers" style="align-content:center;">
                  <input type="username" class="RegButtons" name ="username" id="username" placeholder="Username" required>
                  <input type="password" class="RegButtons" name ="password" id="password" placeholder="Password" required>
                  <input type="email" class="RegButtons" name ="email" id="email" placeholder="yourEmail@gmail.co.uk" required>
                </div>
                  <a id="forgotPassword" href="forgotpassword.php">Forgotten Password</a><br>
                  <input class="openbtn" id="registerLoginButton" name= "Login" type="submit" ></input>
                </form>
                <span><h5 style="margin-top:20px;color: #cacaca">Don't have an account?</h5></span>
                <a href="createAccount.php"><button class="openbtn" id="registerLoginButton"  style="border:#797979 1px solid; color:#9e9c9c;width:100%;margin-top:20px;">Create Account</button></a>
              </div>
            
          
      
          </div>

          
       </div>

      
      

      <?php
    
        if(isset($_POST['Login'])){
            $passwordCheck = FALSE;
            if($_POST['password'] == $_POST['VerifyPassword']){
                if(strlen($_POST['password']) > 8){
                    for($i=0;strlen($_POST['password'])>$i;$i++){
                        if(strtoupper($_POST['password'][$i]) == $_POST['password'][$i]){
                            $passwordCheck = TRUE;
                        }
                    }
                    if($passwordCheck ==TRUE){
                        creatingAccount($db,$_POST['username'],$_POST['password'],$_POST['email'],$_POST['phone']);
                        $_POST  = array();
                    }else{
                        $passwordCheck = FALSE;
                        $PasswordProblem = "Passwords must include a Capital Letter and Numbers";
                    }
                }else{
                    $passwordCheck = FALSE;
                    $PasswordProblem = "Password must be greater than 8 characters";
                    return;
                }
            }
        }

      ?>

    

    




</body>
</html>