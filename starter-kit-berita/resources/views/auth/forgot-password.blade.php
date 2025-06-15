<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Portal Berita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #f8fafc;
            --text: #1e293b;
            --light-text: #64748b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .login-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-left::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .login-left::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -30px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
        }
        
        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
            z-index: 2;
        }
        
        .brand i {
            font-size: 2.5rem;
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 15px;
        }
        
        .brand h1 {
            font-size: 2rem;
            font-weight: 700;
        }
        
        .tagline {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 400px;
            z-index: 2;
        }
        
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
            z-index: 2;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        
        .feature i {
            font-size: 1.2rem;
        }
        
        .login-right {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .login-header {
            margin-bottom: 40px;
        }
        
        .login-header h2 {
            font-size: 2rem;
            color: var(--text);
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: var(--light-text);
        }
        
        .login-form .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: var(--text);
            font-weight: 500;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light-text);
            font-size: 1.1rem;
        }
        
        .login-form input {
            width: 100%;
            padding: 15px 15px 15px 50px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .login-form input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember input {
            width: auto;
        }
        
        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .forgot-password:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .login-btn {
            width: 100%;
            padding: 15px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-bottom: 25px;
        }
        
        .login-btn:hover {
            background: var(--primary-dark);
        }
        
        .back-to-login {
            text-align: center;
            color: var(--light-text);
            margin-top: 20px;
        }
        
        .back-to-login a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }
        
        .back-to-login a:hover {
            text-decoration: underline;
        }
        
        .copyright {
            text-align: center;
            color: var(--light-text);
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }
            
            .login-left {
                padding: 40px 20px;
                text-align: center;
                align-items: center;
            }
            
            .features {
                justify-content: center;
            }
            
            .login-right {
                padding: 40px 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <div class="brand">
                <i class="fas fa-newspaper"></i>
                <h1>Portal Berita</h1>
            </div>
            <p class="tagline">
                Akses berita terkini dari seluruh Indonesia dengan cepat dan akurat. Platform berita modern untuk pembaca cerdas.
            </p>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-bolt"></i>
                    <span>Update Berita Terkini</span>
                </div>
                <div class="feature">
                    <i class="fas fa-shield-alt"></i>
                    <span>Informasi Terverifikasi</span>
                </div>
                <div class="feature">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Akses Lebih Mudah</span>
                </div>
                <div class="feature">
                    <i class="fas fa-bookmark"></i>
                    <span>Berita Terbaik dan Terfavorit</span>
                </div>
            </div>
        </div>
        
        <div class="login-right">
            <div class="login-header">
                <h2>Atur Ulang Password</h2>
                <p>Masukkan email Anda untuk menerima link reset password</p>
            </div>
            
            <!-- Session Status -->
            <div class="session-status">
                <!-- Status message will appear here -->
            </div>
            
            <form class="login-form" method="POST" action="#">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" name="email" placeholder="email@contoh.com" required autofocus>
                    </div>
                </div>
                
                <button type="submit" class="login-btn">Kirim Link Reset Password</button>
            </form>
            
            <div class="copyright">
                © 2025 Portal Berita, Hak Cipta Dilindungi
            </div>
        </div>
    </div>

    <script>
        // Animasi sederhana saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const loginContainer = document.querySelector('.login-container');
            loginContainer.style.opacity = '0';
            loginContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                loginContainer.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                loginContainer.style.opacity = '1';
                loginContainer.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Form submission handling
        document.querySelector('.login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            
            // Show loading state
            const button = document.querySelector('.login-btn');
            const originalButtonText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            button.disabled = true;
            
            // Simulate API request
            setTimeout(() => {
                // Reset button
                button.innerHTML = originalButtonText;
                button.disabled = false;
                
                // Show success message
                const statusDiv = document.querySelector('.session-status');
                statusDiv.innerHTML = `
                    <div style="background: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        Link reset password telah dikirim ke ${email}. Silakan cek email Anda.
                    </div>
                `;
                
                // Scroll to show message
                statusDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 1500);
        });
    </script>
</body>
</html>