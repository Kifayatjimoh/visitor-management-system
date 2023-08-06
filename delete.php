<?php


require "connection.php";

if(isset($_POST['submit'])){
    $id = $_POST['submit'];
    $fetch = "DELETE FROM `information` WHERE `id` = $id";
    mysqli_query($conn, $fetch);
    header('Location: admin.php');
    // "<script> alert('Record delete ');
    // document.location.href = 'admin.php';
    // </script>";
}








?>