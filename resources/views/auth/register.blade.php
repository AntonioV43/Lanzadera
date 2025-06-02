<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="wrapper">
            <nav>
                <div class="left">
                    <!-- Left: Login Card -->
                    <div class="signup-card">
                        <h1>Signup</h1>
                        <p class="subtitle">Just some details to get you in!</p>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="username">
                                <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" />
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="e-mail">
                                <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" />
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="password" style="position: relative;">
                                <input type="password" name="password" placeholder="Password" id="password" />
                                <img src="{{ asset('images/eye-icon.svg') }}" class="eye-icon password-eye" alt="" />
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="confirm-password" style="position: relative;">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="confirm-password" />
                                <img src="{{ asset('images/eye-icon.svg') }}" class="eye-icon confirm-eye" alt="" />
                            </div>

                            <div class="options">
                                <input type="checkbox" id="remember" name="remember" />
                                <label for="remember">Remember me</label>
                            </div>

                            <button type="submit" class="btn">Signup</button>
                        </form>

                        <div class="signup-footer">
                            Already Registered? <a href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>   
                <!-- Right: Welcome Text and Illustration -->
                <div class="hero-section">
                    <div class="right">
                        <h1>Welcome to <br> LANZADERA!</h1>
                        <p class="sub">Together with us</p>
                        <img src="{{ asset('images/human.png') }}" alt="" />
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script src="{{ asset('js/signup.js') }}"></script>
    <script>
        const passwordInput = document.querySelector('#password');
        const confirmPasswordInput = document.querySelector('#confirm-password');
        const passwordEyeIcon = document.querySelector('.password-eye');
        const confirmEyeIcon = document.querySelector('.confirm-eye');

        function togglePasswordVisibility(inputElement, eyeIcon) {
            const isPassword = inputElement.type === 'password';
            inputElement.type = isPassword ? 'text' : 'password';
            eyeIcon.src = isPassword ? '{{ asset("images/eye-on.svg") }}' : '{{ asset("images/eye-icon.svg") }}';
        }

        passwordEyeIcon.addEventListener('click', () => {
            togglePasswordVisibility(passwordInput, passwordEyeIcon);
        });

        confirmEyeIcon.addEventListener('click', () => {
            togglePasswordVisibility(confirmPasswordInput, confirmEyeIcon);
        });
    </script>
</body>
</html>