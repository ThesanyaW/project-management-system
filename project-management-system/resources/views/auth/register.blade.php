<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background: linear-gradient(to bottom right, #f4a261, #2a9d8f); min-height: 100vh; display: flex; justify-content: center; align-items: center;">
<!-- Main Container -->
<div class="rounded shadow-lg p-4" style="background: white; width: 100%; max-width: 800px;">
    <div class="text-center mb-4">
        <img src="{{ asset('storage/images/Logo.png') }}" alt="Logo" class="logo-image mb-3" style="max-width: 100px;">
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <!-- Name -->
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control rounded-pill" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <!-- Email Address -->
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control rounded-pill" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <!-- Password -->
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control rounded-pill" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <!-- Confirm Password -->
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control rounded-pill" placeholder="Confirm Password" required>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('login') }}" class="btn btn-outline-secondary rounded-pill">Back</a>
            <button type="submit" class="btn btn-primary rounded-pill">Register</button>
        </div>
    </form>
</div>
<!-- Scripts -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
