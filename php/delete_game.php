<?php 
echo $_POST["index"];
$game_title = $_POST["index"];

$db = mysqli_connect('localhost','root','','ata'); 
     if(!$db){
         die("CONNECTION ERORR!".mysqli_connect_error);
     }
     $game_title = mysqli_real_escape_string($db, $game_title);
$query = "DELETE FROM games WHERE title = '$game_title'";
mysqli_query($db,$query);



?>