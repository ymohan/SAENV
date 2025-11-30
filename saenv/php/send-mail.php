<?php
// Start session to access the stored CSRF token
session_start();

// Define header to return JSON response
header('Content-Type: application/json');

// 1. Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

// 2. CSRF Security Check
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    echo json_encode(['success' => false, 'message' => 'Security token mismatch. Please refresh the page and try again.']);
    exit;
}

// Configuration
$recipientEmail = "admin@saenv.com.au";
$emailSubject = "New Consultation Request: " . (isset($_POST['company']) ? clean_input($_POST['company']) : 'Unknown');

// Sanitize Input Function
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Collect and Sanitize Data
$name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
$phone = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$company = isset($_POST['company']) ? clean_input($_POST['company']) : '';
$email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$challenge = isset($_POST['challenge']) ? clean_input($_POST['challenge']) : '';

// Basic Validation
if (empty($name) || empty($phone) || empty($company) || empty($email) || empty($challenge)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
    exit;
}

// 3. Professional HTML Email Template
$emailContent = "
<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
    .container { max-width: 600px; margin: 0 auto; border: 1px solid #e0e0e0; border-radius: 5px; overflow: hidden; }
    .header { background-color: #003366; color: #ffffff; padding: 20px; text-align: center; }
    .content { padding: 20px; background-color: #f9f9f9; }
    .field { margin-bottom: 15px; }
    .label { font-weight: bold; color: #555; display: block; font-size: 12px; text-transform: uppercase; }
    .value { font-size: 16px; color: #000; }
    .footer { background-color: #eee; padding: 10px; text-align: center; font-size: 12px; color: #777; }
</style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Consultation Request</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Primary Challenge</span>
                <div class='value' style='color: #003366; font-weight: bold;'>$challenge</div>
            </div>
            <hr style='border: 0; border-top: 1px solid #ddd;'>
            <div class='field'>
                <span class='label'>Full Name</span>
                <div class='value'>$name</div>
            </div>
            <div class='field'>
                <span class='label'>Company</span>
                <div class='value'>$company</div>
            </div>
            <div class='field'>
                <span class='label'>Email Address</span>
                <div class='value'><a href='mailto:$email'>$email</a></div>
            </div>
            <div class='field'>
                <span class='label'>Phone Number</span>
                <div class='value'><a href='tel:$phone'>$phone</a></div>
            </div>
        </div>
        <div class='footer'>
            Received from SAENV Website Contact Form.<br>
            Timestamp: " . date('Y-m-d H:i:s') . "
        </div>
    </div>
</body>
</html>";

// Email Headers (Important for HTML)
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Website Lead <no-reply@saenv.com.au>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";

// Send Email
if (mail($recipientEmail, $emailSubject, $emailContent, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! We have received your request and will contact you shortly.']);
} else {
    // Log error securely on server if needed
    echo json_encode(['success' => false, 'message' => 'Server error: Unable to dispatch email.']);
}
?>