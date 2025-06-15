<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Login | Portal Berita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
            --card-bg: rgba(255, 255, 255, 0.92);
            --glass-border: rgba(255, 255, 255, 0.3);
            --shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        html, body {
            height: 100%;
            overflow-y: auto;
        }
        
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before, body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            z-index: 0;
        }
        
        body::before {
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
        }
        
        body::after {
            bottom: -80px;
            right: -60px;
            width: 300px;
            height: 300px;
        }
        
        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 450px;
            padding: 20px 0;
            margin: 20px auto;
        }
        
        .login-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--glass-border);
            animation: fadeIn 0.8s ease-out;
            transform-style: preserve-3d;
        }
        
        .login-header {
            text-align: center;
            padding: 30px 20px 15px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            z-index: 0;
        }
        
        .logo {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        
        .logo i {
            color: var(--primary);
            font-size: 2rem;
        }
        
        .login-header h1 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .login-header p {
            opacity: 0.9;
            position: relative;
            z-index: 1;
            font-size: 0.9rem;
        }
        
        .login-body {
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            font-size: 1rem;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
            outline: none;
        }
        
        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
            font-size: 1rem;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .remember {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .remember input {
            margin-right: 8px;
            accent-color: var(--primary);
            transform: scale(1.1);
        }
        
        .remember label {
            font-size: 0.9rem;
            color: var(--dark);
        }
        
        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            font-size: 0.9rem;
            white-space: nowrap;
        }
        
        .forgot-password:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
        
        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
            margin-bottom: 5px;
        }
        
        .btn-login::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0.2), rgba(255,255,255,0));
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }
        
        .btn-login:hover::after {
            transform: translateX(100%);
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #6c757d;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }
        
        .divider span {
            padding: 0 12px;
            font-size: 0.85rem;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 20px;
        }
        
        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid #e9ecef;
            color: var(--dark);
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 3px 8px rgba(0,0,0,0.05);
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 12px rgba(0,0,0,0.1);
            color: var(--primary);
        }
        
        .signup-link {
            text-align: center;
            margin-top: 15px;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .signup-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            margin-left: 5px;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .footer {
            text-align: center;
            margin-top: 15px;
            color: white;
            font-size: 0.8rem;
            opacity: 0.8;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }
        
        .floating {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Responsive untuk zoom dan layar kecil */
        @media (max-width: 768px) {
            .login-header {
                padding: 25px 15px 10px;
            }
            
            .login-header h1 {
                font-size: 1.4rem;
            }
            
            .login-body {
                padding: 15px;
            }
            
            body {
                padding: 15px;
            }
            
            .login-container {
                padding: 15px 0;
            }
            
            .logo {
                width: 60px;
                height: 60px;
            }
            
            .logo i {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 480px) {
            .login-header {
                padding: 20px 12px 8px;
            }
            
            .login-header h1 {
                font-size: 1.3rem;
            }
            
            .login-header p {
                font-size: 0.8rem;
            }
            
            .form-group label {
                font-size: 0.9rem;
            }
            
            .form-control {
                padding: 10px 10px 10px 35px;
                font-size: 0.9rem;
            }
            
            .input-with-icon i {
                font-size: 0.9rem;
                left: 10px;
            }
            
            .password-toggle {
                font-size: 0.9rem;
                right: 10px;
            }
            
            .btn-login {
                padding: 10px;
                font-size: 0.95rem;
            }
            
            .divider span {
                font-size: 0.8rem;
            }
            
            .social-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .signup-link {
                font-size: 0.85rem;
            }
        }
        
        /* Perbaikan khusus untuk zoom */
        @media (max-height: 700px) {
            .login-container {
                padding: 10px 0;
            }
            
            .login-header {
                padding: 20px 15px 10px;
            }
            
            .login-body {
                padding: 15px;
            }
            
            .form-group {
                margin-bottom: 15px;
            }
            
            .remember-forgot {
                margin-bottom: 15px;
            }
            
            .divider {
                margin: 15px 0;
            }
        }
        
        /* Memastikan konten tidak terpotong saat zoom */
        .zoom-safe {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="login-container zoom-safe">
        <div class="login-card floating">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h1>PORTAL BERITA</h1>
                <p>Masuk untuk melanjutkan ke dashboard</p>
            </div>
            
            <div class="login-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                   placeholder="Masukkan email Anda">
                        </div>
                        @error('email')
                            <div style="color: #e74c3c; font-size: 0.85rem; margin-top: 5px;">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password" 
                                   placeholder="Masukkan password Anda">
                            <span class="password-toggle" id="passwordToggle">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        @error('password')
                            <div style="color: #e74c3c; font-size: 0.85rem; margin-top: 5px;">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="remember-forgot">
                        <div class="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">Ingat Saya</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password">
                                Lupa Password?
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </button>


                </form>
            </div>
        </div>
        
        <div class="footer">
            &copy; {{ date('Y') }} Portal Berita. Hak Cipta Dilindungi.
        </div>
    </div>

    <script>
        // Password visibility toggle
        const passwordToggle = document.getElementById('passwordToggle');
        const passwordInput = document.getElementById('password');
        
        passwordToggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon
            this.innerHTML = type === 'password' ? 
                '<i class="fas fa-eye"></i>' : 
                '<i class="fas fa-eye-slash"></i>';
        });
        
        // Floating animation for login card
        const loginCard = document.querySelector('.login-card');
        loginCard.addEventListener('mouseenter', () => {
            loginCard.classList.remove('floating');
        });
        
        loginCard.addEventListener('mouseleave', () => {
            loginCard.classList.add('floating');
        });
        
        // Add animation to input focus
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.style.transform = 'translateY(-5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.style.transform = 'translateY(0)';
            });
        });
        
        // Perbaikan khusus untuk zoom
        function adjustLayoutForZoom() {
            const zoomLevel = window.devicePixelRatio;
            const body = document.body;
            
            if (zoomLevel > 1.5) {
                body.classList.add('high-zoom');
            } else {
                body.classList.remove('high-zoom');
            }
        }
        
        window.addEventListener('resize', adjustLayoutForZoom);
        adjustLayoutForZoom();
    </script>
</body>
</html>