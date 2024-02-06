<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
<h1>Welcome to your QR Code, {{ $user->name }}!</h1>
<img src="{{ asset('qrcodes/user_' . $user->id . '.png') }}" alt="QR Code">
</body>
</html>
