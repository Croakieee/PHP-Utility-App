<?php
include 'utility_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textToEncode = isset($_POST['text_to_encode']) ? $_POST['text_to_encode'] : '';
    GenerateQRCode($textToEncode, 'qrcode.png');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    <form method="post">
        <label for="text_to_encode">Text to Encode:</label>
        <input type="text" id="text_to_encode" name="text_to_encode" value="<?php echo $textToEncode; ?>"
