<?php
    require "connection.php";

    if(isset($_POST["submit"])){
        echo '<script> alert("You have successfully sign out "); document.location.href= "admin.php"</script>';
        // header('Location: header.php');
    }



?>