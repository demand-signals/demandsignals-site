<?php
require_once __DIR__ . '/../includes/config.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }

$name    = strip_tags(trim($_POST['name']    ?? ''));
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$service = strip_tags(trim($_POST['service'] ?? ''));
$details = strip_tags(trim($_POST['details'] ?? ''));

if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400); echo json_encode(['error'=>'Invalid']); exit;
}

$subject = "Quick Quote: $name — $service";
$body    = "Name: $name\nEmail: $email\nService: $service\n\nDetails:\n$details\n\n---\nFrom: " . SITE_URL;
$headers = "From: noreply@demandsignals.co\r\nReply-To: $email\r\n";

mail(CONTACT_EMAIL, $subject, $body, $headers)
  ? print(json_encode(['success'=>true]))
  : (http_response_code(500) && print(json_encode(['error'=>'Send failed'])));
