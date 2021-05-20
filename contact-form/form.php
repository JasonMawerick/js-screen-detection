<?php
$name = $_POST['user_name'];
$password = $_POST['user_password'];
$email = $_POST['user_mail'];
$message = $_POST['user_message'];
$birthdate = $_POST['user_birthdate'];
echo $birthdate ;

$currentDate = date('Y-m-d');
echo '<br>' ;
echo 24 + 1894 ; 