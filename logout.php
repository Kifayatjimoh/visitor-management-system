<?php
    require "connection.php";

    if(isset($_POST["submit"])){
        echo '<script> alert("You have successfully sign out "); document.location.href= "index.php"</script>';
        // header('Location: header.php');
    }



?>