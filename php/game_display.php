<?php
require "server.php";

$index = $_POST["index"];
$category = $_POST["target"];
$data = new game();
$query = "SELECT * FROM games WHERE category = '$category'";
$result = mysqli_query($db,$query);
$temp = mysqli_fetch_all($result);

$data->id = utf8_encode($temp[$index][0]);
$data->name = utf8_encode($temp[$index][1]);
$data->image = utf8_encode($temp[$index][2]);
$data->video = utf8_encode($temp[$index][3]);
$data->description = utf8_encode($temp[$index][4]);
$data->price = utf8_encode($temp[$index][5]);
$data->category = utf8_encode($temp[$index][6]);
$data->developer = utf8_encode($temp[$index][7]);
$data->publisher = utf8_encode($temp[$index][8]);
$data->release = utf8_encode($temp[$index][9]);
$data->platform = utf8_encode($temp[$index][10]);
$data->tag = utf8_encode($temp[$index][11]);

echo(json_encode($data));

?>