<?php 
    include 'connect.php';

function loadgames($db){
    $gameId = "";
    $query = mysqli_query($db," SELECT * FROM games");
    $row = mysqli_num_rows($query);

    for($i = 0;$row > $i; $i++){
    $row = mysqli_fetch_assoc($query);
    if(!$row){
        return;
    }
    $gameId = $row['gameId'];
    $gameTitle = explode('(', $row['gameTitle'])[0];  
    $gameImg = $row['gameImg'] ; 
    $gamePrice = $row['gamePrice'];
    $gamePlatform = $row['gamePlatform'];
    $gameDesc = $row['gameDescription'];
    $gameDeal = $row['gameDeal'];
    $gameActualPrice = $gamePrice;
    $style = "background:#b32f99";
    
    if(strpos($gamePlatform,"Switch") !== false){
        $style = "background:red";
    }
    if(strpos($gamePlatform,"Xbox") !== false){
        $style = "background:Green";
    }
    if(strpos($gamePlatform,"PS") !== false){
        $style = "background: #0575E6;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #021B79, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ";
    }
    if(strpos($gamePlatform,"PC") !== false){
        $style = "background:#1b2838";
    }

    if($gameDeal > 0){
        $gameActualPrice = round(($gamePrice * (1 - ($gameDeal/100))),2);
        echo '
        <li>
        <div id="container" onclick="moreInfo(this)" value='.$gameId.'>
        <div id="platformContainer" style="'.$style.'"><p id="platform" >'. $gamePlatform.'<p></div>
            <div id="image-container">
            <img id="gameImage" src="'.$gameImg.'" style="max-width: 190px; max-height: 190px; min-width: 190px; min-height: 190px;">
            </div> 
            <div id="text-container " > 
            <p id="c_title">'. $gameTitle.'<p>
            <div id="discountContainer">
            <p id="money" style="margin-right: 30px;">£'. $gameActualPrice.'</p>
            <p id="oldprice">£'. $gamePrice.'</p>
            <div class="gamedeal">-'.$gameDeal.'% <i class="fa fa-tags" aria-hidden="true"></i></div>
            <p id="c_desc" style="display:none;">'.$gameDesc.'</p>
            </div>
            </div> 
            <div id="align-buttons" value='.$gameId.'></div>
        </div>
        </li>
        '; 
    }else{
        echo '
        <li>
        <div id="container" onclick="moreInfo(this)" value='.$gameId.'>
        <div id="platformContainer" style="'.$style.'"><p id="platform" >'. $gamePlatform.'<p></div>
            <div id="image-container">
            <img id="gameImage" src="'.$gameImg.'" style="max-width: 190px; max-height: 190px; min-width: 190px; min-height: 190px;">
            </div> 
            <div id="text-container " > 
            <p id="c_title">'. $gameTitle.'<p>
            <p id="money">£'. $gameActualPrice.'</p>
            <p id="c_desc" style="display:none;">'.$gameDesc.'</p>
            </div> 
            <div id="align-buttons"></div>
        </div>
        </li>
        ';
    }
 
    }

}


function loadotherconsole($e){
    echo '<div id="mConsole">'.PS4.'</div>';
}
 
function creatingAccount($db,$username,$password,$email,$phonenumber){
    $login = FALSE;
    $password = password_hash($password,PASSWORD_DEFAULT);
    if($phonenumber==null){
        $phonenumber="00000000";
    }
    $accountCreationQuery = mysqli_query($db," SELECT * FROM userslogincredentials");
    $row = mysqli_num_rows($accountCreationQuery);
    for($i = 0;$row > $i; $i++){
        $row = mysqli_fetch_assoc($accountCreationQuery);
        $userEmail = $row['email'] ; 
        $usersLoginCred = $row['username']; 
        $userID = $row['userID'];
        if (!$row) {
            break;
        }
        
        
        if($username == $usersLoginCred && $userEmail == $email){
            $login = FALSE;
        }

        if($username != $usersLoginCred && $userEmail != $email){
            $login = TRUE;
        }

       
    }

    if($login == TRUE){
        mysqli_query($db,"INSERT INTO userslogincredentials(username,password,email,userPhoneNumber) VALUE ('$username','$password','$email','$phonenumber')");
        mysqli_close($db);
        $_POST  = array();
        header('location: Login.php');
    }
    if($login == FALSE){
        echo 'This Username or Email already Exists ';
    }
}
?> 