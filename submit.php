<!-- submit.php -->
<?php
header('Content-Type: application/json');

// Get the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Simulate saving data to a database or any other storage mechanism
// In a real-world scenario, you would use a proper database and validation
$success = true; // Change this based on the success of data storage

if ($success) {
  $response = ['message' => 'Data submitted successfully'];
} else {
  $response = ['message' => 'Error submitting data'];
}

echo json_encode($response);
?>
