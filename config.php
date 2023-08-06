<?php
require "connection.php";


if(isset($_POST["submit"])){ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $datetime = $_POST['datetime'];
    $gender = $_POST['gender'];
    $visit = $_POST['visit'];
    $select = $_POST["selects"];

   


    
    
    
    
    
  
    if(!preg_match('/^[0-9]*$/',$phone)){
        echo '<script> alert("only mobile number "); document.location.href= "index.php"</script>';
        return;

    }
    if(strlen($phone) > 11){
        echo '<script> alert("Enter proper mobile number here  "); document.location.href= "index.php"</script>';
        return;
       
      }
      if(strlen($phone) < 11){
        echo '<script> alert("phone unmber is too short  "); document.location.href= "index.php"</script>';
        return;
      }
      $sql = "INSERT INTO `information`  (`firstname`,`lastname`,`phone`, `datetime`, `gender`, `visit`, `selects`) VALUES( '$firstname', '$lastname', '$phone', '$datetime', '$gender', '$visit', '$select')";
    
      if (mysqli_query($conn, $sql) ) {
        $_SESSION['firstname'] = htmlentities($_POST['firstname']);
        $_SESSION['lastname'] = htmlentities($_POST['lastname']);

        echo '<script> alert("successfull "); document.location.href= "homepage.php"</script>';
        // header('Location: login.php');
    }  else {
        echo '<script> alert("not successfull  ");</script>';
    };
}
    
   
   


?>