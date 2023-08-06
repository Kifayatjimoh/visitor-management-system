<?php
  require "connection.php";

if(isset($_POST["login"])){
    $firstname = $_POST['firstname'];
    // $password = $_POST['pasword'];

    $query = "SELECT * FROM `information` WHERE `firstname` = '$firstname' ";
    $result = mysqli_query($conn,$query);
    $userRow= mysqli_num_rows($result);
   $row= mysqli_fetch_array($result);

   if($row['role'] =="admin"){
    // header("Location: dashboard.php");
    // echo "succ";
    echo '<script> alert("successful "); document.location.href= "dashboard.php"</script>';
   }
   else{
    // header('Location:admin.php');
    echo '<script> alert("not successfull "); document.location.href= "admin.php"</script>';
   }
   
}
?>