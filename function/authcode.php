<?php
session_start();
include('../dbconfig/dbconfig.php');


if(isset($_POST['register_btn'])){
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname=    mysqli_real_escape_string($con, $_POST['lastname']);
    $email=        mysqli_real_escape_string($con, $_POST['email']);
    $username=      mysqli_real_escape_string($con, $_POST['username']);
    $password=       mysqli_real_escape_string($con, $_POST['password']);

    $check_email_query = "SELECT email FROM users WHERE email = '$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['message']="Email Already Exist";
        header('location: ../signup.php');
      
    }else{
            $insert_query = "INSERT INTO `users`(`firstname`,`lastname`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$email','$username','$password')";
            $insert_query_run = mysqli_query($con,$insert_query);
            if($insert_query_run){
                $_SESSION['message']="Regsitered Succesful";
                header('location: ../login.php');
            }else{
                $_SESSION['message'] = "Something went wrong";
            header('location: ../signup.php');
          
            }
    
    }
}
else if(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con,$login_query);
    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($login_query_run);
        $id = $userdata['userid'];
        $username = $userdata['username'];
        $email = $userdata['email'];
        // $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'id' => $id,
            'username' => $username,
            'email' => $email

        ];

      
           
            header('location: ../index.php');
    }

 
    else{
        header('location: ../login.php');

      
    }

}



