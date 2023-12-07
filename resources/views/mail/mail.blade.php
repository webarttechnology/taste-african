<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .user-details {
            list-style: none;
            padding: 0;
        }

        .user-details li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your details have been submitted successfully.</p>
        <ul class="user-details">
            <li>Name: <span id="name">{{ $senderName }}</span></li>
            <li>Phone: <span id="phone"> <a href="tel:{{ $phoneNumber }}">{{ $phoneNumber }}</a></span></li>
        </ul>
    </div>
</body>

</html>
