<?php 
echo $_POST["index"];
$game_title = $_POST["index"];
$db = mysqli_connect('localhost','root','','ata'); 
     if(!$db){
         die("CONNECTION ERORR!".mysqli_connect_error);
     }
$query = "DELETE FROM games WHERE title = '$game_title'";
mysqli_query($db,$query);



?>