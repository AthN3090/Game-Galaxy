<?php 

$db = mysqli_connect('localhost','root','','ata'); 
if(!$db){
    die("CONNECTION ERORR!".mysqli_connect_error);
}
    session_start();
    


if(isset($_POST['adminlogin'])){
    if(checkuser($db, mysqli_real_escape_string($db, $_POST['username']),mysqli_real_escape_string($db, $_POST['password']))){
        $_SESSION['activeAdmin'] = mysqli_real_escape_string($db, $_POST['username']);
        #header( 'location: admin_page.php');
                       
    }else{
        
        echo '<script type ="text/javascript">',
        'alert("Invalid user credentials. Try again");',
        '</script>';
        #header( 'location: admin_login.php');
    }
    
}

function checkuser($db, $username, $password){
    $password = md5($password);
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){
        return TRUE;
    }else{

        return FALSE;
    }


}
if(isset($_POST['adminlogout'])){
    unset($_SESSION['activeAdmin']);
    header("location:admin_login.php");
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
function check($Uname,$Email,$db){
    $user_check_query="SELECT * FROM users WHERE UserName='$Uname' OR Email='$Email' LIMIT 1";
    $result=mysqli_query($db,$user_check_query);
    $temp=mysqli_fetch_assoc($result);
    
    if($temp){
        if($temp['username']===$Uname){
            $msg="Username already exists !";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
        if($temp['email']===$Email){
            $msg1="Email already registered !";
            echo "<script type='text/javascript'>alert('$msg1');</script>";
        }
     return 1;
    }else
    {
        return 0;
    }
    
    
    
}
if(isset($_POST['userLogin'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
    $password=md5($password);
    $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$query);
    
if(mysqli_num_rows($result)==1){
    $user=mysqli_fetch_assoc($result);
    $_SESSION['activeUser']=$user['username'];
        $_SESSION['success']="you are now logged in";
        header('location: index.php');
        
    }else{
        $msg="Incorrect Password or Username !";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
}
if(isset($_POST['userLogout'])){
    unset($_SESSION['activeUser']);
    header('location:index.php');
}
//getting values from signup form 
if(isset($_POST['userSignup'])){
    
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $username =  mysqli_real_escape_string($db,$_POST['username']);
    $mobnumber =  mysqli_real_escape_string($db,$_POST['mobnumber']);
    $email =  mysqli_real_escape_string($db,$_POST['email']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);
    $cpass =  mysqli_real_escape_string($db,$_POST['cpass']);
    $address =  mysqli_real_escape_string($db,$_POST['address']);
    
    
    if(strcmp($pass,$pass)!=0){                                  //check if passwords match
            $msg='Confirm password and password did not match';
        echo "<b><script type='text/javascript'>alert('$msg');</script>";
        }else if(check($username,$email,$db)==0){
//inserting user details
    $password=md5($pass);
     $query="INSERT INTO users (name,username,email,password,mobile,address) VALUES('$name','$username','$email','$password','$mobnumber','$address')";
            mysqli_query($db,$query);
        $_SESSION['activeUser']=$username;
  $_SESSION['success'] = "You are now logged in";
header("location: index.php");

}
    
    }

    if(isset($_POST['saveUser'])){
        
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $username =  mysqli_real_escape_string($db,$_POST['username']);
    $mobnumber =  mysqli_real_escape_string($db,$_POST['mobnumber']);
    $email =  mysqli_real_escape_string($db,$_POST['email']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);
    $cpass =  mysqli_real_escape_string($db,$_POST['cpass']);
    $address =  mysqli_real_escape_string($db,$_POST['address']);
    $sessionuser = $_SESSION['activeUser'];
    
    
    if(strcmp($pass,$cpass)!=0){                                  
        //check if passwords match
            $msg='Confirm password and password did not match';
        echo "<b><script type='text/javascript'>alert('$msg');</script>";
        header("location:user_profile");
        }
//inserting user details
    if(empty($pass) && empty($cpass)){
        $query="UPDATE users SET name = '$name', username = '$username', email = '$email', mobile = '$mobnumber',address = '$address' WHERE username = '$sessionuser'";
    }else{
        $password=md5($pass);
        $query="UPDATE users SET name = '$name', username = '$username', email = '$email'  ,password = '$password', mobile = '$mobnumber',address = '$address' WHERE username = '$sessionuser'";
    }
    
            mysqli_query($db,$query);
            $_SESSION['activeUser'] = $username;
    
            header("location: index.php");

}   

function display_cart($db,$username){

    $query = "SELECT game_id FROM cart WHERE buyer = '$username'";
    $result = mysqli_query($db,$query);
    while($data = mysqli_fetch_array($result)){
        
        echo "<script type='text/javascript'>",
        "display_cart('$data[0]');",
        "</script>";

        


}

}

    


    

?>