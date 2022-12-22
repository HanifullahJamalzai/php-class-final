<?php 

if(isset($_POST['contactSubmitBtn']))
{
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']); 
    $phone = htmlspecialchars($_POST['phone']); 
    $message = htmlspecialchars($_POST['message']); 

    $query = "INSERT INTO `contacts`(`name`, `email`, `phone`, `message`) VALUES ('{$name}','{$email}','{$phone}','{$message}')";
    $isQuery = mysqli_query($db, $query);
    if($isQuery){
        header("location: contact.php");
    }
}
?>