<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Basic reset */
        body, p, h1, h2, h3 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .header {
            background-color: #0044cc;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 10px;
        }

        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #666;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
            }

            .header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Your Company</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <p>Hello {{ $data['firstname'] }},</p>
            <p>Thank you for being a valued customer. We wanted to let you know about our latest updates and offers.</p>
            <p>Here’s what’s new:</p>
            <ul>
                <li>New Feature 1</li>
                <li>Exciting Offer 2</li>
                <li>Improvement 3</li>
            </ul>
            <p>We hope you enjoy these updates. If you have any questions, feel free to reach out to us.</p>
            <p>Best regards,</p>
            <p>Your Company Team</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <p><a href="#" style="color: #0044cc; text-decoration: none;">Unsubscribe</a></p>
        </div>
    </div>
</body>
</html>
