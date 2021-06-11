<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
            body{
                background-image: url("gambar.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
                filter: contrast(5px);
            }
        </style>

<?php 

	$username = "$_GET[username]";
	$email = "$_GET[email]";
	$password = "$_GET[password]";
	
	echo "terimakasih telah melakukan pengisian form <br>";
	echo "nama anda : $username <br>";
	echo "email anda : $email <br>";
	echo "password anda : $password <br>";
	
	
?>
	