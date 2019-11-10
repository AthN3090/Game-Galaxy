<?php include('server.php'); 
if(!isset($_SESSION['activeAdmin'])){
    header("Location:admin_login.php");
 }
 ?>
<html>
    <head>
        <title>admin</title>
    </head>
    <link rel="stylesheet" href="admin_css.css">
    <style>
    #data_form{
        padding: 20px;
    margin:auto;
    top:20px;
    left:0;
    right:0;
    bottom:0;
    position: relative;
    height:700px;
    width:500px ;
    background-color:rgba(0,0,0,0.8);

    }
    textarea{
        resize: none;
        margin: 10px 10px;
        border-radius:10px;
        padding: 5px;

    }
    #admin_menu1{
        height:100% ;
        width:50%;
        float: left;

    }
    #admin_menu2{
        height: 100%;
        width:50%;
       
        float:right;
    }
    #data_manip{
        padding: 20px;
    margin:auto;
    top:20px;
    left:0;
    right:0;
    bottom:0;
    position: relative;
    height:700px;
    width:500px ;
    background-color:rgba(0,0,0,0.8);
    }
    #game_container{
        margin:auto;
        word-wrap:break-word;
    top:20px;
    left:0;
    right:0;
    bottom:0;
    position: relative;
    height:650px;
    width:500px;
    overflow:auto;
    }
    .game{
        width:100%;
        display:flex;
        flex-direction:unset;
        height:auto;
        
    }
    .title{margin: 10px 10px;
        float:left; 
        font-size: 22px;
        color: white;
        min-height:50px;
        width:80%;
        padding: 5px;
    }
    .option{
        padding: 5px;
        margin: 10px 10px;
        float: right;
        height:50px;
    }
    button{
      background: none;
      border:none;
      outline:none; 
      margin: 5px 5px;
    }
    button:hover{
        cursor:pointer;
    }
    .delete{
        height:30px;
        width:60px;
        background-color:red;
        border:none;
        outline:none;
        color:white;
        border-radius:20px;
        padding: 1px 10px;

    }
    .delete:hover{
        cursor:pointer;
    }
    #submit{
        color:white;
        background-color:green;
    }
    #logout{
        background-color:#cc0000;
        border:none;
        border-radius:50px;
        width:100px;
        height:50px;
        position:relative;
        top:-50px;
        color:white;
        outline:none;
    }
    #logout:hover{
        cursor:pointer;
    }
    </style>


    

    <body><script src="../js/ajax.js"></script>
    <?php
       
       
       fetch_game_titles($db); //call to fetch functions
    
    ?>

        <div id="admin_menu1">

          <div id="data_form">
                <center><font size="5" color="white">New game Entry :</font></center>
            <form action="admin_page.php" method="post">
                <input type="text" placeholder="Title" class="input_field" name="game_name" required>
                <input type="text" placeholder="Image name" class="input_field" name="image_path" required>
                <input type="text" placeholder="Youtube link" class="input_field" name="youtube_code" required>
                <textarea placeholder="Description" style="height:100px;width: 95%;outline:none;" name="description" required></textarea>
                <input type="number" placeholder="price" class="input_field" name="price" required>
                <select required style="outline:none;height: 25pt;width: 95%;border-radius: 5pt;margin: 10px;padding-left: 10px;" name="category" >
                    <option disabled selected>Category</option>
                    <option>Adventure</option>
                    <option>Racing</option>
                    <option>Shooter</option>
                    <option>Sports</option>
                    <option>RPG</option>
                    <option>Others</option></select>
                <input type="text" placeholder="Developer" class="input_field" name="developer" required>
                <input type="text" placeholder="Publisher" class="input_field" name="publisher" required>
                <input type="text" placeholder="Released Date" class="input_field" name="released_date" required>
    
                <select required style="outline:none;height:25pt;width: 95%;border-radius: 5pt;margin:10px 10px;;padding-left: 10px;" name="platform">
                    <option selected disabled>Platform</option>
                    <option >PC</option>  
                    <option >PS4</option>
                    <option >Nintendo</option>
                    <option >XBOX ONE</option>
                    <option >XBOX ONE, PC, PS4</option>
                    <option >XBOX ONE, PC</option>

                </select>
                <select required style="outline:none;height:25pt;width: 95%;border-radius: 5pt;margin:10px 10px;;padding-left: 10px;" name="tag">
                    <option selected disabled>Tag</option>
                    <option>Featured</option>  
                    <option>Best Sellers</option>
                    <option>On Sale</option>
                </select>
                <br>
                <input type="submit" value="submit" id="submit" name="newgame">
                
            </form>
        </div>
    </div>
        <div id="admin_menu2">
        <div id="data_manip">
            <center><font size="5" color="white">Current Games :</font></center>
            <div id="game_container"><!--game list container-->
               <!--game dynamic display--> 
              
                <!--<div class="game">
                    <div class="title">2. shadow fo the tomb raider</div>
                    <div class="option">
                        <form>
                        <input class="delete" type="submit" value="Delete" name="delete_button">
                        </form>             
                    </div>
                </div> -->
                
                </div>
            </div>

        </div>
        </div>
<form method="POST">
     <center> <input type="submit" id="logout" value="Log out" name="adminlogout"></center>
</form>
    </body>
    
</html>