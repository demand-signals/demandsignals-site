<?php
// DEMAND SIGNALS — Auto-deploy webhook
// GitHub push → git pull → sync to public_html

define('WEBHOOK_SECRET', '6a6d3397a02056ba7f7f007da84d7a5eef7c7c66e0c5b0fa8e4893955df1c873');
define('REPO_PATH', '/home/demandsignals/repositories/demandsignals-site');
define('PUBLIC_PATH', '/home/demandsignals/public_html');

$payload    = file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
$expected   = 'sha256=' . hash_hmac('sha256', $payload, WEBHOOK_SECRET);

if (!hash_equals($expected, $sig_header)) {
    http_response_code(403);
    exit('Forbidden');
}

$data = json_decode($payload, true);
if (($data['ref'] ?? '') !== 'refs/heads/main') {
    http_response_code(200);
    exit('Ignored: not main');
}

$pull = shell_exec('cd ' . REPO_PATH . ' && git fetch origin main && git reset --hard origin/main 2>&1');
$sync = shell_exec('rsync -a --delete --exclude=".git" --exclude="deploy.php" ' . REPO_PATH . '/ ' . PUBLIC_PATH . '/ 2>&1');

http_response_code(200);
header('Content-Type: application/json');
echo json_encode([
    'status' => 'deployed',
    'sha'    => $data['after'] ?? '',
    'pull'   => trim($pull),
    'sync'   => trim($sync),
    'time'   => date('c'),
]);
