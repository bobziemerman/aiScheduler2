<?php
header('Content-Type: application/json');

$file = 'scheduleData.json';

if (file_exists($file)) {
    $data = file_get_contents($file);
    echo $data ? $data : '{}';
} else {
    echo '{}';
}
?>
