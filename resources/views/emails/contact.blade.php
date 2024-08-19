<!-- contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Form Submission</title>
</head>
<body>
    <h1>Contact Us Form Submission</h1>
    <p><strong>Name:</strong> {{ $data['name'] ?? '' }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] ?? '' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
    <p><strong>Message:</strong> {{ $data['textarea'] ?? '' }}</p>
</body>
</html>
