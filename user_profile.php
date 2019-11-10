<?php include('./php/server.php');

if(!isset($_SESSION['activeUser'])){
    header("location:user_login.php");
}

$username = $_SESSION['activeUser'];

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($db,$query);
$data = mysqli_fetch_array($result);

?>
<html>
<head><link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>
    Edit user details:
    </title>
    <link rel="stylesheet" type="text/css" href="css/myCss.css"> <!-- linked myCss file -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <script src="myScript.js"></script>
    </head>
    <body class="homeBody">
       
        
        
        
    <!-- loading screen ends-->
    <div id="topbar"><!-- topbar for search and title -->
       <a href="index.php"><font id="headerfont">ATA</font></a>
    
    </div>
        <div id="signupbox">
            <div style="text-align: center;font-family:pacifico;font-size:40px;color:white;width: 100%;position: absolute;top: 20px;">Your profile details</div>
            <form method="post" action="index.php" >
            <div class="userdetails">
            <input style="text-transform: capitalize;" class="firstinput" type="text" value="<?php echo $data['name']; ?>" name="name" placeholder="Name" autocomplete="off" required>
            <input class="firstinput" type="text" value="<?php echo $data['username']; ?>" name="username" placeholder="User Name" autocomplete="off" required>
            </div>
            <div class="userdetails"> 
            <input class="firstinput" style="width:;" type="text" name="mobnumber" value="<?php echo $data['mobile']; ?>" placeholder="Mobile number" autocomplete="off" required>
            
            <input class="firstinput" style="width:;" type="text" name="email" value="<?php echo $data['email']; ?>"  placeholder="Email" autocomplete="off" required>
            </div>
            <div class="userdetails">
            
            <input class="firstinput" style="width:90%;" type="text" value="<?php echo $data['address']; ?>" name="address" placeholder="Address" autocomplete="off" required>
            </div>
            <div class="userdetails"> 
            <input class="firstinput" type="password" name="pass" value="" placeholder="New Password" autocomplete="off" >
            <input class="firstinput" type="password" name="cpass" value=""  placeholder="Confirm Password" autocomplete="off" >
            </div>
            <input type="submit" style="width:150px;" id="firstsubmit" name="saveUser" value="Save">

            </form>
        
        
        </div>
    
    
    
    
    
    </body>
</html>