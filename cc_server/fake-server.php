<?php
// fake-server.php

// Capture the POST request with the purchase code
$purchase_code = $_POST['purchase_code'] ?? '';

// Define a simple logic for validation
if ($purchase_code === 'your-fake-valid-code') {
    echo 'valid'; // Respond with 'valid' if the code matches
} elseif ($purchase_code === 'your-fake-unregister-code') {
    echo 'unregister'; // Respond with 'unregister' to simulate unregistering
} else {
    echo 'invalid'; // Respond with 'invalid' for invalid codes
}
?>
