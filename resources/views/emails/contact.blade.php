<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
            color: #334155;
            line-height: 1.6;
        }

        .wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }

        .header {
            font-size: 18px;
            font-weight: bold;
            color: #1e3a8a;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #0f172a;
            margin-top: 15px;
        }

        .value {
            background-color: #f8fafc;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #f1f5f9;
            margin-top: 5px;
        }

        .message-box {
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">Ny kontaktförfrågan via hemsidan</div>

        <div class="label">Namn:</div>
        <div class="value">{{ $formData['name'] }}</div>

        <div class="label">E-postadress:</div>
        <div class="value"><a href="mailto:{{ $formData['email'] }}">{{ $formData['email'] }}</a></div>

        <div class="label">Telefonnummer:</div>
        <div class="value">{{ $formData['phone'] ?? 'Ej angivet' }}</div>

        <div class="label">Meddelande:</div>
        <div class="value message-box">{{ $formData['message'] }}</div>
    </div>
</body>

</html>