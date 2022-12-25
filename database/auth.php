<?php 

$error = $first_nameError = $last_nameError = $emailError = $passwordError = $password_ConfirmationError = "";

if(isset($_POST['register']))
{
    // storing data in variables
    $first_name = htmlspecialchars($_POST['first_name']); 
    $last_name = htmlspecialchars($_POST['last_name']); 
    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']); 
    $password_confirmation = htmlspecialchars($_POST['password_confirmation']);
    
    // Validations
    if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($password_confirmation))
    {
        $error = "<p class='text-danger text-center'>None of the fields should be empty</p>";
        $first_name_pattern = "/^[\w]{4,100}$/";
        
        if(!preg_match($first_name_pattern, $first_name)){
            $first_nameError = "<p class='text-danger text-center'>Not a valid name</p>";
        }
    }
    else if($password != $password_confirmation){
        $password_ConfirmationError = "<p class='text-danger text-center'>Passwords donot match</p>";
    }else{
        // Now Add data to DB;
        $encrypted_password = md5($password);// Password Encryption
        $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) VALUES ('{$first_name}','{$last_name}','{$email}','{$encrypted_password}')";
        $isQuery = mysqli_query($db, $query);
        if($isQuery){
            header("location: login.php");
        }
    }
}

else if(isset($_POST['login']))
{
    // storing data in variables
    $email = htmlspecialchars($_POST['email']); 
    $password = md5(htmlspecialchars($_POST['password']));
    // Validations
    if(empty($email) || empty($password))
    {
        $error = "<p class='text-danger text-center'>None of the fields should be empty</p>";
    }else{
        // Now Add data to DB;

        $query = "SELECT `email`, `password` FROM `users` WHERE `email`='{$email}' AND `password`='{$password}'";
        echo $query;
        $isQuery = mysqli_query($db, $query);
        if($isQuery){
            $result = mysqli_fetch_array($isQuery);
            $_SESSION['email'] = $result['email'];
            header("location: index.php");
        }else{
            $error = "<p class='text-danger text-center'>Email or Password is incorrect</p>";
        }
    }
}

else if(isset($_POST['update_user'])){

}

else if(isset($_GET['logout'])){
    session_destroy();
    header("location: login.php");
}
?>