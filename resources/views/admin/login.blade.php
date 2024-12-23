<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-avatar {
            background-color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-avatar img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
        }

        .login-form {
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .login-container {
                width: 100%;
                max-width: 400px;
            }

            .login-avatar {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="login-container row g-0">
                    <!-- Avatar Section (Desktop) -->
                    <div class="col-md-5 login-avatar d-none d-md-flex">
                        <img src="{{ asset('images/login.png') }}" alt="Admin Avatar">
                    </div>

                    <!-- Login Form Section -->
                    <div class="col-md-7 login-form">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-primary">Admin Login</h2>
                            <p class="text-muted">Enter your credentials to access admin panel</p>
                        </div>

                        <form action="{{ route('admin.login.process') }}" method="POST">
                            @csrf
                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Enter your email" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Enter your password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Login <i class="bi bi-box-arrow-in-right ms-2"></i>
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
