<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --login-primary: #1f6f78;
            --login-dark: #12343b;
            --login-soft: #eaf5f4;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f5fbfa 0%, #d9efec 100%);
        }

        .login-shell {
            min-height: 100vh;
        }

        .login-panel {
            max-width: 440px;
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 1rem 3rem rgba(18, 52, 59, 0.14);
        }

        .brand-mark {
            width: 4rem;
            height: 4rem;
            color: #fff;
            background: var(--login-primary);
            font-size: 1.5rem;
        }

        .form-control:focus {
            border-color: var(--login-primary);
            box-shadow: 0 0 0 0.25rem rgba(31, 111, 120, 0.15);
        }

        .btn-login {
            color: #fff;
            background-color: var(--login-primary);
            border-color: var(--login-primary);
        }

        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: var(--login-dark);
            border-color: var(--login-dark);
        }

        .login-caption {
            color: #5f777b;
        }
    </style>
</head>
<body>
    <main class="login-shell d-flex align-items-center justify-content-center p-3 p-md-4">
        <section class="login-panel card w-100">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <div class="brand-mark rounded-circle d-inline-flex align-items-center justify-content-center fw-bold mb-3">
                        A
                    </div>
                    <h1 class="h3 fw-bold mb-2" style="color: var(--login-dark);">Selamat Datang</h1>
                    <p class="login-caption mb-0">Masuk ke panel administrator</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('auth') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="username" class="form-control form-control-lg @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="username" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>

                    <button type="submit" class="btn btn-login btn-lg w-100 fw-semibold">Masuk</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>