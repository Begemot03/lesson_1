<?php
$data = file_get_contents('php://input');

if ($data) {
    file_put_contents('webhooks.log', $data . PHP_EOL . str_repeat('-', 50) . PHP_EOL, FILE_APPEND);
} else {
    file_put_contents('webhooks.log', 'No data received or empty body' . PHP_EOL, FILE_APPEND);
}
