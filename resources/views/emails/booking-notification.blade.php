<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Notification</title>
</head>
<body>
    <h1>New Booking Notification</h1>
    <p><strong>Visitor Detail:</strong></p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Country: {{ $country }}</li>
        <li>Email: {{ $email }}</li>
        <li>WhatsApp Number: {{ $whatsappNumber }}</li>
    </ul>

    <p><strong>Surfing Experience:</strong></p>
    <ul>
        <li>Visitor Surfing Experience: {{ $surfingExperience }}</li>
        <li>Visit Date: {{ $visitDate }}</li>
        <li>Your Desired Board: {{ $desiredBoard }}</li>
    </ul>

    <!-- Add ID Verification section here if needed -->
</body>
</html>
