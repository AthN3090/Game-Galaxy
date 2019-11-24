<?php include('./php/server.php'); 

if(isset($_SESSION['activeUser'])){
    header("location:user_profile.php");
}

?>

<html>

    <head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        
    <link rel="stylesheet" type="text/css" href="css/myCss.css"> <!-- linked myCss file -->

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
   
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    
    

    </head>


    <body class="homeBody">
    <div id="navbar"><!-- topbar for search and title -->
        <a href="index.php"><font id="headerfont">Home</font></a>
    </div>

    <!-- bootstrap cointainer -->
    <!--login box -->
    <div class="col-sm mr-auto">
        <div id="loginBox" >
        
                <img id="userPic" class="img-fluid" src="img/logo/user.png">
        <!-- login form -->
        
                <form method="post" action="index.php">        
        
                    <input id="username"  type="text" placeholder="Username" autofocus autocomplete="off" name="username" required>
           
                    <input id="password"  type="password" placeholder="Password" name="password" required>
        
                    <input type="submit" id="submit" value="LogIn" name="userLogin">
            
                    <center><font style="position:relative;top:140pt;" color="white" face="nunito">Not a member? <a style="color:#28a658;"  href="user_signup.php">SignUp</a></font></center> 
        
                </form><!-- login form ends -->
    
        </div>
      
                <!-- login box -->
    </div>
            </div>
            </div>
   
        <!-- bootsrtap cointainer ends -->

    
     <script src="myScript.js"></script>
        
        </body>
        
    
</html>