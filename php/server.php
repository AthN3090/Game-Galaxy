<?php 
     $db = mysqli_connect('localhost','root','','ata'); 
     if(!$db){
         die("CONNECTION ERORR!".mysqli_connect_error);
     }
if(isset($_POST['newgame'])){
    $game_name = mysqli_real_escape_string($db,$_POST['game_name']);
    $image_path= mysqli_real_escape_string($db,$_POST['image_path']);
    $youtube_code = mysqli_real_escape_string($db,$_POST['youtube_code']);
    $description = mysqli_real_escape_string($db,$_POST['description']);
    $price = mysqli_real_escape_string($db,$_POST['price']);
    $category = mysqli_real_escape_string($db,$_POST['category']);
    $developer = mysqli_real_escape_string($db,$_POST['developer']);
    $publisher = mysqli_real_escape_string($db,$_POST['publisher']);
    $released_date= mysqli_real_escape_string($db,$_POST['released_date']);
    $platform = mysqli_real_escape_string($db,$_POST['platform']);
    $data_check=0;
    $query="select title from games";
    $result= mysqli_query($db,$query);
    while($data = mysqli_fetch_array($result)){ //avoid redundancy in the db
    
        if($game_name==$data[0]){

           $data_check=1;
        }
    }
    
    
    if($data_check==0){
    $query = "INSERT INTO games (title,image_path,video,description,price,category,
    developer,publisher,released_date,platform) VALUES 
    ('$game_name','$image_path','$youtube_code','$description','$price','$category',
    '$developer','$publisher','$released_date','$platform')";
    mysqli_query($db,$query);
    fetch_game_titles();
    }
}

function fetch_game_titles(){
    $db = mysqli_connect('localhost','root','','ata');
    if(!$db){
        die("Connection error".mysqli_connect_error);
    }

    $query = "SELECT title from games";
    $result=mysqli_query($db,$query);
    #this while loop executes for every row it fetch repeateadly.
    while($data = mysqli_fetch_array($result,MYSQLI_NUM)){
                
            echo '<script type="text/javascript">',
            'ajaxCall();',
            '</script>';



        }

    }



    

?>