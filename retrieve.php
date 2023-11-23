<?php
header("Content-Type: application/json");

// Read existing data from donations.json
$donationsFile = 'donations.json';
$donationsData = json_decode(file_get_contents($donationsFile), true);

// Retrieve data from local storage (Assuming you've saved it with the key 'donations')
$localData = json_decode($_POST['localData'], true);

// Append local data to the existing data
$donationsData[] = $localData;

// Save the updated data back to donations.json
file_put_contents($donationsFile, json_encode($donationsData));

echo json_encode(['message' => 'Data retrieved and saved successfully.']);
?>
