<?php
require 'server.php';
class cart_item{
    public $id;
    public $name;
    public $image;
    public $price;

}
$game_id = $_POST['game_id'];
$username = $_SESSION['activeUser'];
$query = "SELECT title, image_path, price FROM games WHERE id = '$game_id'";
$result = mysqli_query($db, $query);
$temp = mysqli_fetch_array($result);
$item = new cart_item();
$item->id = $game_id;
$item->name = utf8_encode($temp[0]);
$item->image = utf8_encode($temp[1]);
$item->price = utf8_encode($temp[2]);

echo(json_encode($item));





?>