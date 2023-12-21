<?php
include 'utility_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passwordLength = isset($_POST['password_length']) ? (int)$_POST['password_length'] : 8;
    $generatedPassword = GenerateRandomPassword($passwordLength);
} else {
    $passwordLength = 8;
    $generatedPassword = GenerateRandomPassword($passwordLength);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form method="post">
        <label for="password_length">Password Length:</label>
        <input type="number" id="password_length" name="password_length" min="1" value="<?php echo $passwordLength; ?>" required>
        <button type="submit">Generate Password</button>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>Generated Password: <?php echo $generatedPassword; ?></p>
    <?php endif; ?>
</body>
</html>
