<?php

 if( isset($_POST['username_1'], $_POST['password_1_1'], $_POST['password_1_2'], $_POST['firstname_1'], $_POST['lastname_1'], $_POST['email_1'], $_POST['usertype_1'], $_POST['address_1'], $_POST['phonenumber_1']) ){	

// CHECK IF FIELDS ARE NOT EMPTY

if(!empty(trim($_POST['username_1'])) && !empty(trim($_POST['password_1_2'])) && !empty(trim($_POST['password_1_1'])) && !empty(trim($_POST['email_1'])) && !empty(trim($_POST['usertype_1']))){
	
	
// Escape special characters.
$username_1 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['username_1']));
$email_1 = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['email_1']));
$password_1_1 = mysqli_real_escape_string($db_connection, $_POST['password_1_1']);
 $password_1_2 = mysqli_real_escape_string($db_connection, $_POST['password_1_2']);
$firstname_1 = $_POST['firstname_1'];
$lastname_1 = $_POST['lastname_1'];
$usertype_1 = $_POST['usertype_1'];
$address_1 = $_POST['address_1'];
$phonenumber_1 = $_POST['phonenumber_1'];



//IF EMAIL IS VALID
if (filter_var($email_1, FILTER_VALIDATE_EMAIL)) {  



// CHECK IF EMAIL IS ALREADY REGISTERED

$check_email = mysqli_query($db_connection, "SELECT `email` FROM `users` WHERE email = '$email_1'");
$check_username = mysqli_query($db_connection, "SELECT `username` FROM `users` WHERE username = '$username_1'");

if(mysqli_num_rows($check_email) > 0){    
$email_error = "This Email Address is already registered. Please Try another.";
}
else if (mysqli_num_rows($check_username) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else {
// IF EMAIL IS NOT REGISTERED


$user_hash_password = password_hash($_POST['password_1_1'], PASSWORD_DEFAULT);

// INSER USER INTO THE DATABASE

$insert_user = mysqli_query($db_connection, "INSERT INTO users (username, password, firstname, lastname, email, usertype, address) VALUES ('$username_1', '$user_hash_password', '$firstname_1', '$lastname_1', '$email_1', '$usertype_1', '$address_1', '$phonenumber_1')");

if($insert_user === TRUE){
$success_message = "Thanks! You have successfully signed up.";
}
else{
$error_message = "Oops! something wrong.";
}

}    

}
else {
// IF EMAIL IS INVALID
$error_message = "Invalid email address";
}

}

}

?>