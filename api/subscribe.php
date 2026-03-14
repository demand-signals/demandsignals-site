<?php
require_once __DIR__ . '/../includes/config.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }

$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400); echo json_encode(['error'=>'Invalid email']); exit;
}

$subject = "Blog Subscriber: $email";
$body    = "New blog subscriber: $email\n\nFrom: " . SITE_URL;
$headers = "From: noreply@demandsignals.co\r\n";

mail(CONTACT_EMAIL, $subject, $body, $headers)
  ? print(json_encode(['success'=>true]))
  : print(json_encode(['success'=>true])); // Always succeed — subscriber shouldn't see backend errors
