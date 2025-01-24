<?php
require 'includes/config.php';
include_once('includes/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $countryCode = trim($_POST['countryCode']);
    $phone = trim($_POST['phone']);
    $company = trim($_POST['company']);
    $company_size = trim($_POST['company_size']);
    $country = trim($_POST['country']);

    // Validate required fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($company) || empty($company_size) || empty($country)) {
        header('Location: contact.php?error=Please fill in all required fields.');
        exit();
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO form_submissions (firstname, lastname, email, phone, company, company_size, country) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$firstname, $lastname, $email, $countryCode . $phone, $company, $company_size, $country]);
        header('Location: contact.php?success=Your message has been sent successfully.');
    } catch (PDOException $e) {
        header('Location: contact.php?error=Failed to submit your message. Please try again later.');
    }
}
?>
