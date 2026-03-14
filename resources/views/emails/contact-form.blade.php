<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry — Sigmix Labs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f7;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e2e2e2;
        }

        .header {
            background: #3067FF;
            padding: 28px 32px;
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .header p {
            color: rgba(255, 255, 255, 0.75);
            margin: 4px 0 0;
            font-size: 13px;
        }

        .body {
            padding: 32px;
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #888;
            margin-bottom: 4px;
        }

        .field p {
            margin: 0;
            font-size: 15px;
            color: #1a1a1a;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .divider {
            border: none;
            border-top: 1px solid #ebebeb;
            margin: 24px 0;
        }

        .footer {
            padding: 20px 32px;
            background: #f9f9fb;
            border-top: 1px solid #ebebeb;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1>New Enquiry from the Website</h1>
            <p>Submitted via the Sigmix Labs contact form</p>
        </div>
        <div class="body">
            <div class="field">
                <label>Full Name</label>
                <p>{{ $name }}</p>
            </div>
            @if(!empty($company))
            <div class="field">
                <label>Company / Organisation</label>
                <p>{{ $company }}</p>
            </div>
            @endif
            <div class="field">
                <label>Email</label>
                <p><a href="mailto:{{ $email }}" style="color:#3067FF;">{{ $email }}</a></p>
            </div>
            @if(!empty($phone))
            <div class="field">
                <label>Phone</label>
                <p>{{ $phone }}</p>
            </div>
            @endif
            <hr class="divider">
            <div class="field">
                <label>Subject</label>
                <p>{{ $subject }}</p>
            </div>
            <div class="field">
                <label>Message</label>
                <p>{{ $body }}</p>
            </div>
        </div>
        <div class="footer">
            This email was sent from the contact form at sigmixlabs.com. Reply directly to this email to respond to {{
            $name }}.
        </div>
    </div>
</body>

</html>
