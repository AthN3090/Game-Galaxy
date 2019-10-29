<?php include('server.php'); ?>
<html>
    <head>
        <title>admin</title>
    </head>
    <link rel="stylesheet" href="admin_css.css">
    <script>
    alert("Game Succesfully Added !");
    if(confirm("Would you like to review or add another game ?")){
                window.location.href = "admin_page.php";
    }else{
                    window.location.href = "../index.php";
    }
    </script>

    <body>
    

    </body>
    
</html>