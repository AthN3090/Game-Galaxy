<?php
require 'server.php';
if(!isset($_SESSION['activeUser'])){
    echo "FALSE";
 }else{
     
 
$user = $_SESSION['activeUser'];
$game_id = $_POST['gameid'];
$query = "SELECT * FROM cart WHERE game_id='$game_id' AND buyer = '$user';";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)==0){
$query = "INSERT INTO cart (game_id, buyer) VALUES ('$game_id','$user');";
mysqli_query($db,$query);
echo "DONE";
}else{
    echo "CANT";
}

 }





?>