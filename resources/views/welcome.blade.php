<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App - Welcome</title>
    <!-- Include Bootstrap CSS for styling (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles (optional) -->
    <style>
        body {
            background-color: #f8fafc;
            color: #374151;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            padding: 120px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .welcome-container p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
        .btn-custom {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
            background-color: #2563eb;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #1d4ed8;
        }
        .footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #9ca3af;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to {{ config('app.name') }}!</h1>
        <p>Your journey to mastering Laravel starts here.</p>
        <a href="#" class="btn-custom">Get Started</a>
    </div>

    <div class="footer">
        &copy; 2024 My Laravel App. All rights reserved.
    </div>

    <!-- Include Bootstrap JS for interactivity (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>