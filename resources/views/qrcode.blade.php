<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generated QR Code</title>
    <link rel="stylesheet" href="style.css">

    <!-- Styles -->
</head>

<body class="qrcode">
    <div class="container">
        <h1>Your QR Code</h1>
        <img src="data:image/png;base64, {!! $qrcode !!}" alt="QR Code">
        <h3>
            Simplify Access with QR Codes
        </h3>
        <p>
            QR codes provide a seamless way for people to access your content. Share your generated code, and anyone can
            quickly scan it using their smartphone's camera to reach your specified URL.
        </p>
    </div>
</body>

</html>