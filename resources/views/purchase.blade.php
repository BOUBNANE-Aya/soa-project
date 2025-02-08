<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .purchase-card {
            background: #16213e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 400px;
            color: white;
        }
        .purchase-card h2 {
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

<div class="purchase-card">
    <h2>Complete Your Purchase</h2>
    <form method="POST" action="#">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Shipping Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-custom">Confirm Purchase</button>
    </form>
</div>

</body>
</html>
