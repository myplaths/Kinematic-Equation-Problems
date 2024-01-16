<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];

    // Validate and sanitize the data if necessary

    // Define the file path (adjust the path as needed)
    $filePath = 'data_storage.txt';

    // Open the file in append mode
    $file = fopen($filePath, 'a');

    if ($file) {
        // Write the data to the file
        fwrite($file, $data . PHP_EOL);

        // Close the file
        fclose($file);

        echo 'Data stored successfully.';
    } else {
        echo 'Error opening the file.';
    }
}
?>
