<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Add other fields as needed

    // Append data to savedlog.php
    $data = "Name: $name, Email: $email\n";
    file_put_contents('savedlog.php', $data, FILE_APPEND | LOCK_EX);

    echo json_encode(["message" => "Donation data saved successfully"]);
} else {
    // Handle invalid requests
    http_response_code(400);
    echo json_encode(["error" => "Invalid request"]);
}
?>
