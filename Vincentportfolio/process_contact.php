<?php
// Start session
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // You can add email sending functionality here
        // For now, we'll just save to a file or database
        
        // Option 1: Save to a text file
        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'date' => date('Y-m-d H:i:s')
        ];
        
        // Create messages directory if it doesn't exist
        if (!file_exists('messages')) {
            mkdir('messages', 0777, true);
        }
        
        // Save to file
        $filename = 'messages/contact_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.txt';
        $content = "Name: {$data['name']}\n";
        $content .= "Email: {$data['email']}\n";
        $content .= "Date: {$data['date']}\n";
        $content .= "Message:\n{$data['message']}\n";
        $content .= str_repeat('-', 50) . "\n";
        
        if (file_put_contents($filename, $content)) {
            // Success message
            $_SESSION['form_message'] = "Thank you, {$name}! Your message has been sent successfully. I'll get back to you soon.";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['form_message'] = "Sorry, there was an error sending your message. Please try again.";
            $_SESSION['message_type'] = 'error';
        }
        
        // Optional: Send email (uncomment and configure if you have email setup)
        /*
        $to = 'moralesvincent011@gmail.com';
        $subject = 'New Contact Form Message from ' . $name;
        $emailMessage = "Name: {$name}\n";
        $emailMessage .= "Email: {$email}\n\n";
        $emailMessage .= "Message:\n{$message}\n";
        $headers = "From: {$email}\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        
        if (mail($to, $subject, $emailMessage, $headers)) {
            $_SESSION['form_message'] = "Thank you, {$name}! Your message has been sent successfully.";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['form_message'] = "Sorry, there was an error sending your message.";
            $_SESSION['message_type'] = 'error';
        }
        */
        
    } else {
        // Error messages
        $_SESSION['form_message'] = implode(' ', $errors);
        $_SESSION['message_type'] = 'error';
    }
    
    // Redirect back to contact form
    header('Location: contact.php');
    exit();
} else {
    // If not POST, redirect to home
    header('Location: index.php');
    exit();
}
?>

