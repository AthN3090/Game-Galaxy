<?php 

     $db = mysqli_connect('localhost','root','','ata'); 
     if(!$db){
         die("CONNECTION ERORR!".mysqli_connect_error);
     }

     class game{
        public $id;
        public $name;
        public $image;
        public $video;
        public $description;
        public $price;
        public $category;
        public $developer;
        public $publisher;
        public $release;
        public $platform;
        public $tag;
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
    $tag = mysqli_real_escape_string($db,$_POST['tag']);
    $data_check=0;
    $query="select title from games where title = '$game_name'";
    $result= mysqli_query($db,$query);
    while($data = mysqli_fetch_array($result)){ //avoid redundancy in the db
    
        if($game_name==$data[0]){
           $data_check=1;
           
        }
    }
    
    
    if($data_check!=1){
        echo "hello";
    $query = "INSERT INTO games (title,image_path,video,description,price,category,
    developer,publisher,released_date,platform,tag) VALUES 
    ('$game_name','$image_path','$youtube_code','$description','$price','$category',
    '$developer','$publisher','$released_date','$platform','$tag')";
    mysqli_query($db,$query);
    header("location: redirect_page.php");
    
    }
}

function fetch_game_titles($db){
    $query = "SELECT title from games";
    $result=mysqli_query($db,$query);
    #this while loop executes for every row it fetch repeateadly.
    while($data = mysqli_fetch_array($result,MYSQLI_NUM)){
                
            echo '<script type="text/javascript">',
            'admin_list_games();',
            '</script>';



        }

    }


function fetch_game_main($db){
    
 $query = "SELECT id,title,image_path FROM games";
 $result = mysqli_query($db,$query);
 while($data = mysqli_fetch_array($result)){

    echo '<script type="text/javascript">',
    'display_games_main();',
    '</script>';

 }
}
 
 function fetch_games($db,$target){

  $query = "SELECT id,title,image_path FROM games WHERE category = '$target'";
  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)){
 
     echo "<script type='text/javascript'>",
     "display_games('$target');",
     "</script>";
     
 }
}
 function fetch_tagged_games($db,$target){

    $query = "SELECT id,title,image_path FROM games WHERE tag = '$target'";
    $result = mysqli_query($db,$query);
    while($data = mysqli_fetch_array($result)){
   
       echo "<script type='text/javascript'>",
       "display_tagged_games('$target');",
       "</script>";
       
   }




}
    

?>