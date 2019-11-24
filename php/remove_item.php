<?php 
require './server.php';

$index = $_POST['id'];
$username = $_SESSION['activeUser'];
$query = "DELETE FROM cart WHERE game_id = '$index' AND buyer = '$username'";
mysqli_query($db,$query);


?>