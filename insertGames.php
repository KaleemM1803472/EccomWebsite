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
            <a href="#">Home</a>
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

<body onload="randomlist()">
        <div class="mainbody">
          <div id="sortBy">
                  <div class="dropdown" >
                      <button class="dropbtn">Sort By</button>
                      <div class="dropdown-content">
                          <a class="openbtn" id="HightoLow" type="button" >High to Low</a>
                          <a class="openbtn" id="LowtoHigh" type="button" >Low to High</a>
                          <a class="openbtn" id="xbox" type="button" >Xbox only</a>
                          <a class="openbtn" id="ps" type="button" >Playstation Only</a>
                      </div>
                    </div>
              </div>

          <div id="main-body-container">
            <script type="text/javascript" src="javascript.js"> </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

            <form  method="post" name="form">
                    <input type="text" name="Title" ></input>
                    <input type="text" name="Img" ></input>
                    <input type="float" name="Price" ></input>
                    <input type="text" name="Platform" ></input>
                    <input type="submit" name="submit"></input>
                  </form>  


            <?php 
              
                if(isset($_POST['submit'])){
                   
                    $query = mysqli_query($db," SELECT * FROM games");
                    $row = mysqli_num_rows($query);

                    $title = $_POST['Title'];
                    $img = $_POST['img'];
                    $price = $_POST['Price'];
                    $platform = $_POST['Platform'];

                    for($i = 0;$row > $i; $i++){
                        $row = mysqli_fetch_assoc($query);
                        if(!$row){
                            break;
                        }
                        $gameTitle = $row['gameTitle'] ;  
                        $gameImg = $row['gameImg'] ; 
                        $gamePrice = $row['gamePrice'];
                        


                        if($title==$gameTitle){
                            echo  $gameTitle,   $gameImg , $gamePrice, $img , $title;
                        
                        }
                        // else{
                        //     // echo $sqlupdate1 = "UPDATE table SET commodity_quantity=$qty WHERE user='".$rows['user']."' ";
                        //     echo $query1 = mysqli_query($db,"UPDATE games  SET  gameTitle=$gameTitle != $title gameImg=$gameImg gamePrice=$price gamePlatform=$platform WHERE  gameImg !=$img gameTitle!=$title");
                        // }
                    }
                       
                    
                    header("location: insertGames.php");
                    // echo $_POST['Title']; echo $_POST['Img'];echo $_POST['Price'];echo $_POST['Platform'];
                }
              ?> 

        </div>
      </div>
     
</body>
</html>


<!-- 
// function login(){
  //   mainbodyContainer = document.getElementById("main-body-container");
  //   while(mainbodyContainer.hasChildNodes()){
  //     mainbodyContainer.removeChild(mainbodyContainer.firstChild);
  //   }
    
  //   document.getElementById("LoginContainer").style.display = "";

  //  } -->