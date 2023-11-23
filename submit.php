<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = $_POST;
    $dataString = json_encode($formData);

    // Save data to a file
    file_put_contents('paymentlog.txt', $dataString . PHP_EOL, FILE_APPEND);

    // Return a response (optional)
    echo json_encode(['message' => 'Your Data has been received. We will contact you with your email id!']);
} else {
    // Handle invalid requests
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'Invalid request']);
}
?>
