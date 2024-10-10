<?php
header('Content-Type: application/json');

$file = 'scheduleData.json';
$data = file_get_contents('php://input');

if ($data) {
    file_put_contents($file, $data);
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
}
?>
