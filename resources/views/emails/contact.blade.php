<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New enquiry</title>
    <style>
        body{font-family: -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#111827}
        .wrap{max-width:600px;margin:0 auto;padding:20px}
        .muted{color:#6b7280}
        .panel{border:1px solid #e5e7eb;border-radius:8px;padding:16px}
        h1{font-size:18px;margin:0 0 10px}
        pre{white-space:pre-wrap}
    </style>
</head>
<body>
<div class="wrap">
    <h1>New website enquiry</h1>
    <p class="muted">You received a new message from the contact form.</p>
    <div class="panel">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Message:</strong></p>
        <pre>{{ $messageBody }}</pre>
    </div>
    <p class="muted">This email was sent automatically by the Mush QS website.</p>
</div>
</body>
</html>
