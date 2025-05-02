<?php 
session_start();
include("connection.php");

if (isset($_POST['name'])) {
    $Name = mysqli_real_escape_string($conn, $_POST['name']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $Message = mysqli_real_escape_string($conn, $_POST['description']);

   
 
    // print_r(  $Name);
    // print_r(  $Email);
    // print_r(  $Subject);
    // print_r(  $Message);
    // die();

   
    $sql = "insert into users(Name,Email,Subject,Message) values('$Name','$Email','$Subject','$Message')";
  

    $result = $conn->query($sql);
    
    if ($result == true) {
        $_SESSION['description'] = "Submit success";
        // echo"info";
        header('Location: contact.php');
    } else {
        $_SESSION['error'] = "Todo cannot be created.";
        header('Location: contact.php');
    }
}
?>

