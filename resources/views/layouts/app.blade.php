<!DOCTYPE html>
<html>
<head>
    <title>Oil Change Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            color: #222;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button, .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .error {
            background: #fee2e2;
            padding: 12px;
            border-radius: 6px;
            color: #991b1b;
        }

        .success {
            background: #dcfce7;
            padding: 16px;
            border-radius: 8px;
            color: #166534;
        }

        .warning {
            background: #fef3c7;
            padding: 16px;
            border-radius: 8px;
            color: #92400e;
        }

        .details {
            margin-top: 24px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>