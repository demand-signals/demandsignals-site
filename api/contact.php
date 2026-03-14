<?php
// Contact form handler
// Agent: update $to for any email routing changes
require_once __DIR__ . '/../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Method not allowed']);
  exit;
}

$name    = strip_tags(trim($_POST['name']    ?? ''));
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$message = strip_tags(trim($_POST['message'] ?? ''));
$business = strip_tags(trim($_POST['business'] ?? ''));
$phone   = strip_tags(trim($_POST['phone']   ?? ''));
$service = strip_tags(trim($_POST['service'] ?? ''));

if (!$name || !$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(['error' => 'Name and valid email required']);
  exit;
}

$to      = CONTACT_EMAIL;
$subject = "New Contact: $name" . ($business ? " ($business)" : '');
$body    = "Name: $name\n";
$body   .= "Business: $business\n";
$body   .= "Email: $email\n";
$body   .= "Phone: $phone\n";
$body   .= "Service: $service\n\n";
$body   .= "Message:\n$message\n\n";
$body   .= "---\nFrom: " . SITE_URL;

$headers  = "From: noreply@demandsignals.co\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
  echo json_encode(['success' => true]);
} else {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to send']);
}
