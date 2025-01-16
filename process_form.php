<?php
require 'includes/config.php';   // Make sure this is included before using any variables or settings from config.php
require 'includes/db_connection.php';   // This initializes the $pdo variable for database connection

// Use prepared statements with PDO to avoid SQL injection
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$company_size = $_POST['company_size'];
$country = $_POST['country'];
$how_did_you_hear_about_us = $_POST['how_did_you_hear_about_us'];
$message = $_POST['message'];
$data_protection_policy = isset($_POST['data_protection_policy']) ? 1 : 0;
$opt_in = isset($_POST['opt_in']) ? 1 : 0;
$captcha = $_POST['captcha_1184'];  // CAPTCHA value

// Prepare the SQL query using placeholders for the values
$sql = "INSERT INTO contact (firstname, lastname, email, phone, company, company_size, country, how_did_you_hear_about_us, message, data_protection_policy, opt_in, captcha_1184) 
        VALUES (:firstname, :lastname, :email, :phone, :company, :company_size, :country, :how_did_you_hear_about_us, :message, :data_protection_policy, :opt_in, :captcha)";

// Prepare the statement
$stmt = $pdo->prepare($sql);

// Bind the parameters to the SQL query
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':company', $company);
$stmt->bindParam(':company_size', $company_size);
$stmt->bindParam(':country', $country);
$stmt->bindParam(':how_did_you_hear_about_us', $how_did_you_hear_about_us);
$stmt->bindParam(':message', $message);
$stmt->bindParam(':data_protection_policy', $data_protection_policy);
$stmt->bindParam(':opt_in', $opt_in);
$stmt->bindParam(':captcha', $captcha);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: Could not execute the query.";
}
?>
