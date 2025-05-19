<?php

namespace Controllers;

class functions{
        

    public function abort($code, $message = null){
        // Set the HTTP response status code
        http_response_code($code);
        
        // Define default messages for common status codes
        $defaultMessages = [
            400 => 'طلب خاطئ',
            401 => 'لم يتم المصادقة',
            403 => 'لا يمكن الوصول',
            404 => 'الصفحة غير موجودة',
            500 => 'خطأ تقني',
        ];

        // Determine the message to display
        if (!$message && isset($defaultMessages[$code])) {
            $message = $defaultMessages[$code];
        } elseif (!$message) {
            $message = 'An error occurred.';
        }

        // Display a simple HTML error page
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>خطأ $code</title>
        </head>
        <body>
            <h1>Error $code</h1>
            <p>$message</p>
        </body>
        </html>";

        // Stop script execution
        exit;
    }


}