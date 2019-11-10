<?php 

include('server.php');


if(($_POST['user']=='1')){

if(isset($_SESSION['activeUser']))
    echo 1;
else
    echo 0;

}


?>