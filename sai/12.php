<?php
// Generate an error
echo $undefinedVariable;

// Get the last occurred error
$error = error_get_last();

if ($error) {
    echo "Last Error: " . $error['message'] . "<br>";
    echo "File: " . $error['file'] . "<br>";
    echo "Line: " . $error['line'];
} else {
    echo "No error occurred.";
}
?>
