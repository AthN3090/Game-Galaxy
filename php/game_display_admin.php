<?php
require "server.php";
$index = intval($_GET['q']);
$query = "SELECT title FROM games";
$result = mysqli_query($db,$query);
$game_name = array();
while($title  = mysqli_fetch_array($result)){
  
      $game_name[] = $title[0];

}
echo($game_name[$index-1]);
 
 ?>