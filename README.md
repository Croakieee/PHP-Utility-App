# PHP Utility App

This PHP utility application provides a versatile collection of useful functions for various tasks. Additionally, it includes a simple web interface to interact with some of the functions visually.

## Functions

1. **GenerateRandomPassword:**
   Generates a random password with the specified length.

2. **CalculateAge:**
   Calculates the age based on the given birthdate.

3. **FormatCurrency:**
   Formats a numeric value as currency with a specified currency code.

4. **SendEmail:**
   Sends an email using the `mail` function with a simple message.

5. **EncryptString:**
   Encrypts a string using the `password_hash` function.

6. **DecryptString:**
   Decrypts a previously encrypted string using `password_verify`.

7. **GenerateThumbnail:**
   Generates a thumbnail image from a given image file.

8. **IsWeekend:**
   Checks if a given date falls on a weekend.

9. **ValidateEmail:**
   Validates an email address using a simple regex pattern.

10. **GenerateQRCode:**
    Generates a QR code image for a given text.

11. **GenerateUUID:**
    Generates a Universally Unique Identifier (UUID).

12. **CompressImage:**
    Compresses an image file to reduce file size.

13. **ReverseString:**
    Reverses the characters in a given string.

14. **ConvertToUppercase:**
    Converts a string to uppercase.

15. **GetFileExtension:**
    Retrieves the file extension from a file path.

## Web Interface

1. **Password Generator:**
   Accessible at `/password_generator.php`, this page allows you to generate random passwords by specifying the length.

2. **QR Code Generator:**
   Accessible at `/qrcode_generator.php`, this page enables you to generate QR codes for text input.

## Usage

1. Clone the repository to your local machine.
2. Configure your web server to serve PHP files.
3. Visit the web interface pages to interact with the functions visually.
4. Include the `utility_functions.php` file in your PHP project.
5. Utilize the functions as needed in your PHP code.


