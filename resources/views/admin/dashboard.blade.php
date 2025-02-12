{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #1a1a2e;
            color: white;
        }
        .sidebar {
            background: #16213e;
            height: 100vh;
            width: 250px;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #0f3460;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            background: #1f4068;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <a href="#">Dashboard</a>
    <a href="#">Products</a>
    <a href="#">Clients</a>
    <a href="#">Factures</a>
    <a href="#">Logout</a>
</div>

<!-- Main Content -->
<div class="content">
    <h2>Welcome, Admin</h2>
    <p>Here is an overview of your system.</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Total Products</h5>
                <p>25</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Total Clients</h5>
                <p>50</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Total Factures</h5>
                <p>30</p>
            </div>
        </div>
    </div>
</div>

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            transition: background 0.3s, color 0.3s;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            padding: 20px;
            transition: background 0.3s;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: var(--hover-bg);
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        /* Light Mode */
        .light-mode {
            --bg-color: #f8f9fa;
            --text-color: #000;
            --sidebar-bg: #ffffff;
            --hover-bg: #e0e0e0;
        }

        /* Dark Mode */
        .dark-mode {
            --bg-color: #1a1a2e;
            --text-color: white;
            --sidebar-bg: #16213e;
            --hover-bg: #0f3460;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }
        .sidebar {
            background-color: var(--sidebar-bg);
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3 class="text-center">Admin Panel</h3>
    <a href="{{ route('admin.product.index') }}">📦 Products</a>
    <a href="{{ route('admin.client.index') }}">👤 Clients</a>
    <a href="{{ route('admin.facture.index') }}">📄 Factures</a>
    {{-- <a href="">📦 Products</a>
    <a href="">👤 Clients</a>
    <a href="">📄 Factures</a> --}}

    <hr>

    <!-- Dark Mode Toggle -->
    <button id="darkModeToggle" class="btn btn-secondary w-100">🌙 Toggle Dark Mode</button>
</div>

<div class="main-content">
    @yield('content')
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if dark mode is saved in localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.add("light-mode");
        }

        document.getElementById("darkModeToggle").addEventListener("click", function () {
            if (document.body.classList.contains("dark-mode")) {
                document.body.classList.remove("dark-mode");
                document.body.classList.add("light-mode");
                localStorage.setItem("darkMode", "disabled");
            } else {
                document.body.classList.remove("light-mode");
                document.body.classList.add("dark-mode");
                localStorage.setItem("darkMode", "enabled");
            }
        });
    });
</script>

</body>
</html>
