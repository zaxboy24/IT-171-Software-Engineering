<?php
if(isset($_POST['email_2']) && isset($_POST['password_2_1'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['email_2'])) && !empty(trim($_POST['password_2_1']))){


// Escape special characters.
$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['email_2'])));

$query = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$email_2'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['password_2_1'];

// VERIFY PASSWORD
$check_password = password_verify($_POST['password_2_1'], $user_db_pass);

if($check_password === TRUE){

session_regenerate_id(true);

$_SESSION['email_2'] = $user_email;  
header('Location: home.php');
exit;

}
else{
// INCORRECT PASSWORD
$error_message = "Incorrect Email Address or Password.";

}

}
else{
// EMAIL NOT REGISTERED
$error_message = "Incorrect Email Address or Password.";
}


}
else{

// IF FIELDS ARE EMPTY
$error_message = "Please fill in all the required fields.";
}

}
?>