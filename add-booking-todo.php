<?php
session_start();
include("connection.php");


if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $booking = mysqli_real_escape_string($conn, $_POST['booking']);
    $persons = mysqli_real_escape_string($conn, $_POST['persons']);
    $headline = mysqli_real_escape_string($conn, $_POST['headline']);

    $message = mysqli_real_escape_string($conn, $_POST['message']);

   
 
    // print_r(  $name);
    // print_r(  $email);
    // print_r(  $phone);
    // print_r(  $city);
    // print_r(  $address);
    // print_r(  $booking);
    // print_r(  $persons);
    // print_r(  $headline);
    // print_r(  $message);
    // die();

   
    $sql = "insert into carbooking(Name,Email,Phone,City,Address,Booking,Persons,Headline,Message) values('$name','$email','$phone','$city','$address','$booking','$persons','$headline','$message')";
  

    $result = $conn->query($sql);
    
    if ($result == true) {
        $_SESSION['description'] = "Submit success";
        // echo"info";
        header('Location: booking.php');
    } else {
        $_SESSION['error'] = "Todo cannot be created.";
        header('Location: booking.php');
    }
}
?>