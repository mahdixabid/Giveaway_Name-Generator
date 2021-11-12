<?php
$firstName= $_POST['firstName'];
$lastNAME= $_POST['lastNAME'];
$email= $_POST['email'];
if (isset($_POST['submit'])){
    $firstName= mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastNAME= mysqli_real_escape_string($conn,$_POST['lastNAME']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
     
    $data = "INSERT INTO users(firstName, lastName, email) 
        VALUES ('$firstName', '$lastNAME','$email')";

    if(empty($firstName)){
        echo '<h6>first name is empty</h6>';
    }
    elseif(empty($lastNAME)){
        echo '<h6>Last NAME is empty</h6';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<h5>invalid email</h5>';
        
    }
    elseif(empty($email)){
        echo '<h6>email is empty</h6>';
    }
    else {

        if(mysqli_query($conn, $data)) {
            header('location: index.php');
        }
        }
    }
    ?>