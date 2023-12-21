# PHP Utility App

This PHP utility application provides a collection of useful functions for various tasks. You can integrate these functions into your PHP projects for enhanced functionality.

## Functions

1. **GenerateRandomPassword:**
   Generates a random password with the specified length.

    ```php
    $password = GenerateRandomPassword(12);
    ```

2. **CalculateAge:**
   Calculates the age based on the given birthdate.

    ```php
    $birthdate = '1990-01-01';
    $age = CalculateAge($birthdate);
    ```

3. **FormatCurrency:**
   Formats a numeric value as currency with a specified currency code.

    ```php
    $amount = 1000.50;
    $formattedAmount = FormatCurrency($amount, 'USD');
    ```

4. **SendEmail:**
   Sends an email using the `mail` function with a simple message.

    ```php
    $to = 'recipient@example.com';
    $subject = 'Test Email';
    $message = 'This is a test email.';
    SendEmail($to, $subject, $message);
    ```

5. **EncryptString:**
   Encrypts a string using the `password_hash` function.

    ```php
    $stringToEncrypt = 'SensitiveData';
    $encryptedString = EncryptString($stringToEncrypt);
    ```

6. **DecryptString:**
   Decrypts a previously encrypted string using `password_verify`.

    ```php
    $originalString = DecryptString($encryptedString);
    ```

7. **GenerateThumbnail:**
   Generates a thumbnail image from a given image file.

    ```php
    $sourceImagePath = 'path/to/source/image.jpg';
    $thumbnailImagePath = 'path/to/save/thumbnail.jpg';
    GenerateThumbnail($sourceImagePath, $thumbnailImagePath, 100, 100);
    ```

8. **IsWeekend:**
   Checks if a given date falls on a weekend.

    ```php
    $dateToCheck = '2023-01-01';
    $isWeekend = IsWeekend($dateToCheck);
    ```

9. **ValidateEmail:**
   Validates an email address using a simple regex pattern.

    ```php
    $emailToValidate = 'user@example.com';
    $isValidEmail = ValidateEmail($emailToValidate);
    ```

10. **GenerateQRCode:**
    Generates a QR code image for a given text.

    ```php
    $textToEncode = 'https://example.com';
    GenerateQRCode($textToEncode, 'path/to/save/qrcode.png');
    ```

## Usage

1. Clone the repository to your local machine.
2. Include the `utility_functions.php` file in your PHP project.
3. Utilize the functions as needed in your PHP code.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
