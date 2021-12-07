<?php 
    include "connect.php" ;
    include "functionList.php";
    session_start();
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


<body onload="randomlist()">
        <div class="mainbody">
          <div id="sortBy">
                  <div class="dropdown" >
                      <button class="dropbtn">Sort By</button>
                      <div class="dropdown-content">
                          <a class="openbtn" id="HightoLow" type="button" >High to Low</a>
                          <a class="openbtn" id="LowtoHigh" type="button" >Low to High</a>
                          <a class="openbtn" id="xbox" onclick="filterBy('Xbox')" type="button" >Xbox only</a>
                          <a class="openbtn" id="ps" onclick="filterBy('PS')" >Playstation Only</a>
                      </div>
                    </div>
              </div>

          <div id="main-body-container">
            <script type="text/javascript" src="javascript.js"> </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

            <!-- <form action="index.php" method="post" name="form">
                    <input type="text" name="Title" ></input>
                    <input type="text" name="Img" ></input>
                    <input type="float" name="Price" ></input>
                    <input type="text" name="Platform" ></input>
                    <input type="submit" name="submit"></input>
                  </form>   -->

            <div id="galContainer">
            <?php 
              loadgames($db);

              ?> 
            </div>

            <div id="overlay" onclick="overlayoff(this)" >
              <div id="buyContainer">
                <div id="mTitle">Battlefield 2042</div>
                <div id="mContainer">
                  <div id="mPic">
                    <img id="mgamepic"src="https://cdn.game.net/image/upload/c_fill,dpr_1.0,f_auto,h_200,q_auto/v1/game_img/ml2/8/0/8/4/808403_xb1_a.png"/>
                  </div>
                  <div id="line"></div>
                  <div id="mbContainer">
                    <div id="mMoneyContainer">
                      <p id="money" style="margin-right: 30px; color:black;">£54.99</p>
                      <p id="oldprice" style="font-size: 21px;">£54.99</p>
                      <div class="gamedeal" id="mGameDeal">-25% <i class="fa fa-tags" aria-hidden="true"></i></div>
                    </div>
                    <div id="mConsoleContainer">
                    </div>
                  </div>
              </div>
              <div id="mGameDesc">
                    <p>Battlefield 2042 for PS5 - an epic, spectacular battle to shape the global future.
Battlefield 2042 plays out in a near-future world transformed by disorder. With support for 128 players, this is warfare on unprecedented scale in vast environments across the globe. Players will take on several massive experiences, from updated multiplayer modes like Conquest and Breakthrough to the new Hazard Zone. You must adapt to dynamically-changing battlegrounds with the help of your squad and a cutting-edge arsenal.

Transformed by Disorder 
In 2042, extreme weather events and resource conflicts have shifted the balance of global power. The US and Russia stand at the brink of war, while a mix of Non-Patriated combat veterans form independent groups known as Task Forces. Fight to define the future.

128 Simultaneous Players 
This colossal player count offers new gameplay opportunities and epic Battlefield moments. Feel the intensity of taking part in massive-scale battles where anything can happen.

Vast, Dynamic Environments 
Get a sense of spectacular, large-scale war on 7 massive maps. Each battlefield has multiple distinct combat areas and this extra space means more variety and more meaningful vehicle gameplay – tanks have more space to roam, fighter jets have more airspace to manoeuvre. Adapt on-the-fly to dynamic events and disasters, such as sandstorms in the deserts of Qatar, a rocket launching from French Guiana’s Space Centre, and tornadoes in South Korea’s concrete jungles.

Cutting-Edge Arsenal 
Unleash your combat creativity through a full roster of cutting-edge weapons, vehicles, jets, helis, and new equipment inspired by the near-future of 2042. Summon the Ranger, a robotic dog built for battle, use the Syrette Pistol to revive squad members from afar, employ a grappling hook to reach new places, don a wingsuit, deploy a recon drone, and more.</p>
                  </div>
              </div>
            </div>

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