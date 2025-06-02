<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <body style="background-image: url('{{ asset('images/BG.png') }}')">
    <header>
        <div class="wrapper">
            <nav>
                <div class="left">
                    <!-- Left: Login Card -->
                    <div class="login-card">
                        <h1>Login</h1>
                        <p class="subtitle">Glad you're back!</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="username">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="password" style="position: relative;">
                                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                                <img src="{{ asset('images/eye-icon.svg') }}" class="eye-icon" alt="Toggle password visibility" />
                                @error('password')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="options">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                <label for="remember">Remember me</label>
                            </div>

                            <button type="submit" class="btn">Login</button>

                            <div class="forgot-password">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                            </div>

                            <div class="signup-footer">
                                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>   
                <!-- Right: Welcome Text and Illustration -->
                <div class="hero-section">
                    <div class="right">
                        <h1>Welcome to <br> LANZADERA!</h1>
                        <p class="sub">Login to access your account</p>
                        <img src="{{ asset('images/human.png') }}" alt="Welcome illustration" />
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script src="{{ asset('js/login.js') }}"></script>
    <script>
      const passwordInput = document.querySelector('.password input');
      const eyeIcon = document.querySelector('.eye-icon');

      eyeIcon.addEventListener('click', () => {
        // Toggle password visibility
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';

        // Swap the eye icon image
        eyeIcon.src = isPassword ? '{{ asset("images/eye-on.svg") }}' : '{{ asset("images/eye-icon.svg") }}';
      });
    </script>
</body>
</html>