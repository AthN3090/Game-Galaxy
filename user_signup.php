<?php include('./php/server.php')?>
<html>
<head><link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>
    Sign Up for ATA games
    </title>
    <link rel="stylesheet" type="text/css" href="css/myCss.css"> <!-- linked myCss file -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="myScript.js"></script>
    </head>
    <body class="homeBody">
       
        
        
        
    <!-- loading screen ends-->
    <div id="topbar"><!-- topbar for search and title -->
       <a href="index.php"><font id="headerfont">Home</font></a>
    
    </div>
        <div id="signupbox">
            <div style="text-align: center;font-family:pacifico;font-size:40px;color:white;width: 100%;position: relative;top: 20px;margin-top:20px;margin-bottom:20px;">Sign up</div>
            <form method="post">
            <div class="userdetails">
            <input style="text-transform: capitalize;" class="firstinput" type="text" name="name" placeholder="Name" autocomplete="off" required>
            <input class="firstinput" type="text" name="username" placeholder="User Name" autocomplete="off" required>
            </div>
            <div class="userdetails"> 
            <input class="firstinput"  type="text" name="mobnumber" placeholder="Mobile number" autocomplete="off" required>
            
            <input class="firstinput"  type="text" name="email" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="userdetails">
            
            <input class="firstinput" style="width:90%;" type="text" name="address" placeholder="Address" autocomplete="off" required>
            </div>
            <div class="userdetails"> 
            <input class="firstinput" type="password" name="pass" placeholder="Your Password" autocomplete="off" required>
            <input class="firstinput" type="password" name="cpass" placeholder="Confirm Password" autocomplete="off" required>
            </div>
           <center> <input type="submit" id="firstsubmit" name="userSignup" value="Confirm"> </center>
            </form>
        
        
        </div>
    
    
    
    
    
    </body>
</html>