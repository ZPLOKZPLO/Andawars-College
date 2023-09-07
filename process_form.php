<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Define the path to the JSON file
    $jsonFilePath = 'formdata.json';

    // Collect form data
    $formData = [
        'full-name' => $_POST['full-name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'field-of-interest' => $_POST['field-of-interest'],
        'graduate-school' => $_POST['graduate-school'],
        'message' => $_POST['message']
    ];

    // Encode the form data as JSON
    $jsonData = json_encode($formData, JSON_PRETTY_PRINT);

    // Save the JSON data to the file
    if (file_put_contents($jsonFilePath, $jsonData) !== false) {
        // Redirect back to the form page after successful submission
        header('Location: form.html');
        exit;
    } else {
        // Display an error message if writing to the file fails
        echo "Error: Unable to save the form data.";
    }
}
?>
