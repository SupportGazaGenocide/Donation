<!-- submit.php -->
<?php
header('Content-Type: application/json');

// Get the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Initialize the donations array or load existing data
$donations = json_decode(file_get_contents('donations.json'), true) ?: [];

// Add the new donation
$donations[] = $data;

// Save the updated donations array to the file
file_put_contents('donations.json', json_encode($donations, JSON_PRETTY_PRINT));

$response = ['message' => 'Data submitted successfully'];
echo json_encode($response);
?>
