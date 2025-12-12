<?php
// Start session for form messages
session_start();

// Get form message if exists
$formMessage = '';
$messageType = '';

if (isset($_SESSION['form_message'])) {
    $formMessage = $_SESSION['form_message'];
    $messageType = $_SESSION['message_type'] ?? 'success';
    unset($_SESSION['form_message']);
    unset($_SESSION['message_type']);
}

// Get current page for active navigation
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'My Portfolio'; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Vincent Morales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'index' ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'about' ? 'active' : ''; ?>" href="about.php">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'photos' ? 'active' : ''; ?>" href="photos.php">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

