<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            background-image: url('{{ asset('storage/images/background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /*background-color: #1a202c;*/
        }
        </style>
</head>
<body>
<!-- Main Container -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-lg login-box" style="width: 100%; max-width: 400px;">
        <div>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary rounded-pill">Sign Up</a>
        </div>
        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="{{ asset('storage/images/Logo.png') }}" alt="Logo" class="logo-image mb-3" style="max-width: 150px;">
            <h2>Login</h2>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @if($errors->has('email'))
                    <div class="text-danger mt-1">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                @if($errors->has('password'))
                    <div class="text-danger mt-1">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>

            <!-- Forgot Password and Login Button -->
            <div class="d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-primary">Forgot your password?</a>
                @endif
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
