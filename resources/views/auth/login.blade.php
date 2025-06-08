<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | LANZADERA</title>
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
    <div class="absolute inset-0 bg-Purple z-0"></div>
    <div class="fixed inset-0 z-0 pointer-events-none" id="purple-shapes">
      <img src="/images/Blob.svg" class="absolute bottom-[10vh] right-[30vw] w-[15vw]" />
      <img src="/images/Blob1.svg" class="absolute top-[0vh] right-[20vw] w-[20vw]" />
      <img src="/images/Blob2.svg" class="absolute top-[15vh] right-[0vw] w-[10vw]" />
      <img src="/images/Blob4.svg" class="absolute bottom-[-35vh] right-[-5vw] w-[60vw]" />
      <img src="/images/Blob5.svg" class="absolute top-[0vh] right-[0vw] w-[20vw]" />
      <img src="/images/Blob3.svg" class="absolute top-[30vh] left-[32vw] w-[20vw]" />
    </div>

    <div class="absolute left-0 top-0 h-full w-[40%] bg-Gray z-10"></div>

    <div class="fixed inset-0 w-screen h-screen pointer-events-none z-20">
      <img src="/images/bunder2.svg" class="absolute top-[5vh] left-[-2vw] w-[15.73vw]" />
      <img src="/images/bunder.svg" class="absolute bottom-[-1vh] left-[34.3%] transform -translate-x-1/2 w-[11.46vw]" />
    </div>

    <!-- Login Form -->
    <div class="absolute left-0 top-0 w-[40%] h-full z-30 flex items-center justify-center">
      <div class="bg-[#2b2b2e] bg-opacity-70 rounded-xl p-8 w-[75%] max-w-3xl h-[50%] max-h-3xl text-white shadow-lg">
        <h2 class="text-3xl font-bold mb-2">Login</h2>
        <p class="text-sm mb-6 text-gray-300">Glad you're back.!</p>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus
            class="w-full p-2 mb-4 rounded bg-gray-800 border border-gray-600 focus:outline-none" />

        <div class="password-container mb-4">
          <input type="password" id="password" name="password" placeholder="Password" class="w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
          <span class="toggle-password" onclick="togglePasswordVisibility('password')">
            <!-- Replace with your SVG file -->
            <img src="{{ asset('/images/eye-on.svg') }}" class="w-5 h-5" alt="Toggle password visibility">
          </span>
        </div>

          <div class="flex items-center justify-between mb-4">
            <label class="inline-flex items-center text-sm">
              <input type="checkbox" name="remember" class="form-checkbox hidden" />
              <span class="w-4 h-4 inline-block mr-2 rounded border border-gray-400 relative">
                <svg class="absolute inset-0 w-full h-full opacity-0 transition-opacity duration-200"
                  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 13l4 4L19 7" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              Remember me
            </label>
            <a href="{{ route('password.request') }}" class="text-sm text-gray-400 hover:underline">Forgot password?</a>
          </div>

          <button type="submit"
            class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded font-semibold">
            Login
          </button>
        </form>

        <p class="mt-4 text-sm text-center text-gray-400">
          Don't have an account?
          <a href="{{ route('register') }}" class="text-purple-400 hover:underline">Sign Up</a>
        </p>
      </div>
    </div>

    <div class="absolute top-0 right-0 w-[60%] h-full z-30 flex items-center justify-center">
      <div class="text-center text-white px-8">
        <h1 class="text-7xl font-bold mb-2">Welcome to</h1>
        <h2 class="text-6xl font-semibold text-gray-200 mb-4">LANZADERA !</h2>
        <p class="text-sm text-gray-200 mb-8">Login to access your account</p>
        <img src="/images/human.png" alt="Human Illustration" class="w-[100%] max-w-3xl mx-auto" />
      </div>
    </div>

    <script>
      function togglePasswordVisibility(fieldId) {
    const passwordInput = document.getElementById(fieldId);
    const toggleIcon = passwordInput.nextElementSibling.querySelector('img');
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      // Change to your "eye closed" SVG
      toggleIcon.src = "{{ asset('/images/eye-off.svg') }}";
    } else {
      passwordInput.type = 'password';
      // Change back to your "eye open" SVG
      toggleIcon.src = "{{ asset('/images/eye-on.svg') }}";
    }
  }
  </script>
  </body>
</html>