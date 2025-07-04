<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Lanzadera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              Purple: '#925FE2',
              Gray: '#333437',
            },
          },
        },
      };
    </script>
    <style>
      /* Custom checkbox styles */
      input[type="checkbox"]:checked + span {
        background: linear-gradient(to bottom, #7CC1F3 0%, #D27EEF 100%);
        border-color: transparent;
      }
      input[type="checkbox"]:checked + span svg {
        opacity: 1;
      }

      .password-container {
        position: relative;
      }
      .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #9CA3AF;
      }
    </style>
  </head>
  <body class="h-screen m-0 p-0 overflow-hidden relative">
    <!-- Purple background (base layer) -->
    <div class="absolute inset-0 bg-Purple z-0"></div>

    <!-- Shapes container (light purple shapes) - fixed positioning makes them immune to zoom -->
    <div class="fixed inset-0 z-0 pointer-events-none" id="purple-shapes">
      <!-- Shape 1 -->
      <img src="/images/Blob.svg" alt="Shape 1" class="absolute bottom-[10vh] right-[30vw] w-[15vw] z-3 opacity-100" />
      <!-- Shape 2 -->
      <img src="/images/Blob1.svg" alt="Shape 2" class="absolute top-[0vh] right-[20vw] w-[20vw] opacity-100" />
      <!-- Shape 3 -->
      <img src="/images/Blob2.svg" alt="Shape 3" class="absolute top-[15vh] right-[0vw] w-[10vw] opacity-100" />
      <!-- Shape 4 -->
      <img src="/images/Blob4.svg" alt="Shape 4" class="absolute bottom-[-35vh] right-[-5vw] w-[60vw] z-5 opacity-100" />
      <!-- Shape 5 -->
      <img src="/images/Blob5.svg" alt="Shape 5" class="absolute top-[0vh] right-[0vw] w-[20vw] Z-5 opacity-100" />
      <!-- Shape 6 -->
      <img src="/images/Blob3.svg" alt="Shape 6" class="absolute top-[30vh] left-[32vw] w-[20vw] Z-5 opacity-100" />
    </div>

    <!-- Gray panel layered on top (40% width) -->
    <div class="absolute left-0 top-0 h-full w-[40%] bg-Gray z-10"></div>
    
    <!-- Image container with fixed positioning -->
    <div class="fixed inset-0 w-screen h-screen pointer-events-none z-20">
      <!-- Top-left circle image -->
      <img
        src="/images/bunder2.svg"
        alt="Top Circle"
        class="absolute top-[5vh] left-[-2vw] w-[15.73vw] h-[15.73vw]"
      />
  
      <!-- Bottom-center circle image -->
      <img
        src="/images/bunder.svg"
        alt="Bottom Circle"
        class="absolute bottom-[-1vh] left-[34.3%] transform -translate-x-1/2 w-[11.46vw] h-[11.46vw]"
      />
    </div>
    
    <!-- Login Form -->
    <div class="absolute left-0 top-0 w-[40%] h-full z-30 flex items-center justify-center">
      <div class="bg-[#2b2b2e] bg-opacity-70 rounded-xl p-8 w-[75%] max-w-3xl h-[50%] max-h-3xl text-white shadow-lg">
        <h2 class="text-3xl font-bold mb-2">Login</h2>
        <p class="text-sm mb-6 text-gray-300">Glad you're back.!</p>
        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="mb-4">
            <input type="email" name="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror w-full p-2 mb-1 rounded bg-gray-800 border border-gray-600 focus:outline-none" required autofocus>
            @error('email')
              <span class="invalid-feedback">
                {{ $message }}
              </span>
            @enderror
          </div>

          <div class="password-container mb-4">
            <input type="password" id="password" name="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
            <span class="toggle-password" onclick="togglePasswordVisibility()">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </span>
            @error('password')
              <span class="invalid-feedback">
                {{ $message }}
              </span>
            @enderror
          </div>
          
            <div class="flex items-center justify-between mb-4">
            <label class="inline-flex items-center text-sm">
              <input type="checkbox" name="remember" class="form-checkbox hidden" />
              <span class="w-4 h-4 inline-block mr-2 rounded border border-gray-400 relative">
                <svg class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 13l4 4L19 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              Remember me
            </label>

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="text-sm text-gray-400 hover:underline">{{ __('Forgot Your Password?') }}</a>
            @endif
          </div>
          <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded font-semibold">Login</button>
        </form>
        <p class="mt-4 text-sm text-center text-gray-400">
          Don't have an account? <a href="{{ route('register') }}" class="text-purple-400 hover:underline">Sign Up</a>
        </p>
      </div>
    </div>

    <!-- Welcome Text and Image Section -->
    <div class="absolute top-0 right-0 w-[60%] h-full z-30 flex items-center justify-center">
      <div class="text-center text-white px-8">
        <h1 class="text-7xl font-bold mb-2">Welcome to</h1>
        <h2 class="text-6xl font-semibold text-gray-200 mb-4">LANZADERA !</h2>
        <p class="text-sm text-gray-200 mb-8">Login to access your account</p>
        <img src="/images/human.png" alt="Human Illustration" class="w-[100%] max-w-3xl mx-auto" />
      </div>
    </div>

    <script>
      function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password svg');
        
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          // Change to eye-off icon
          toggleIcon.innerHTML = `
            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
            <line x1="1" y1="1" x2="23" y2="23"></line>
          `;
        } else {
          passwordInput.type = 'password';
          // Change back to eye icon
          toggleIcon.innerHTML = `
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          `;
        }
      }
    </script>
  </body>
</html>