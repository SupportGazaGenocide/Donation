<!-- save-data.php -->
<?php
// Handle the submitted form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  // Validate and sanitize data (add more validation as needed)

  // Save data to the file
  $filePath = 'paymentlog.txt';
  $file = fopen($filePath, 'a');
  fwrite($file, json_encode($data) . PHP_EOL);
  fclose($file);

  // Respond with a success message
  echo json_encode(['message' => 'Your data has been received. We will contact you with your email id.']);
} else {
  // Respond with an error message for unsupported requests
  http_response_code(405);
  echo json_encode(['error' => 'Method Not Allowed']);
}
?>
