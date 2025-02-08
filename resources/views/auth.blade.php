<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e; /* Dark background */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #16213e; /* Slightly lighter dark */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 350px;
            color: white;
        }
        .login-card h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            background: #1f4068;
            color: white;
            border: none;
        }
        .form-control:focus {
            background: #1f4068;
            color: white;
            box-shadow: none;
        }
        .btn-custom {
            background: #e94560;
            border: none;
            width: 100%;
        }
        .btn-custom:hover {
            background: #ff3860;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Admin Login</h2>
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="identifier" class="form-label">Identifier</label>
            <input type="text" class="form-control" id="identifier" name="identifier" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-custom">Login</button>
    </form>
</div>

</body>
</html>
