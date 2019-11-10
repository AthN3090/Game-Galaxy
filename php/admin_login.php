<?php include('server.php');
if(isset($_SESSION['activeAdmin'])){
    header( 'location: admin_page.php');   
}
?>
<html>
<head>
<title>Admin</title>
</head>
<link rel="stylesheet" href="admin_css.css">
<body>



    <div id="admin_login">
    <center>
    <form id="form"  method="POST">
        <label><center>ADMIN LOGIN</center></label>
        <br><br>
        <input id="username" required type="text" class="input_field" placeholder="Username" autocomplete="off" name="username">
        <input id="password" required type="password" class="input_field" placeholder="Password" name="password">
        <br>
        <input type="submit" id="submit" value="Log in" name="adminlogin"> 
    </form></center>

    </div>

</body>
</html>