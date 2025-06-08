<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layered Layout</title>
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
      .eye-icon, .eye-off-icon {
        display: none;
        width: 20px;
        height: 20px;
      }
      .eye-icon.show, .eye-off-icon.show {
        display: block;
      }
    </style>
  </head>
  <body class="h-screen m-0 p-0 overflow-hidden relative">
    <!-- Purple background (base layer) -->
    <div class="absolute inset-0 bg-Purple z-0"></div>

    <!-- Shapes container (light purple shapes) - fixed positioning makes them immune to zoom -->
    <div class="fixed inset-0 z-0 pointer-events-none" id="purple-shapes">
      <!-- Shape 1 -->
      <img src="{{ asset('images/Blob.svg') }}" alt="Shape 1" class="absolute bottom-[10vh] right-[30vw] w-[15vw] z-3 opacity-100" />
      <!-- Shape 2 -->
      <img src="{{ asset('images/Blob1.svg') }}" alt="Shape 2" class="absolute top-[0vh] right-[20vw] w-[20vw] opacity-100" />
      <!-- Shape 3 -->
      <img src="{{ asset('images/Blob2.svg') }}" alt="Shape 3" class="absolute top-[15vh] right-[0vw] w-[10vw] opacity-100" />
      <!-- Shape 4 -->
      <img src="{{ asset('images/Blob4.svg') }}" alt="Shape 4" class="absolute bottom-[-35vh] right-[-5vw] w-[60vw] z-5 opacity-100" />
      <!-- Shape 5 -->
      <img src="{{ asset('images/Blob5.svg') }}" alt="Shape 5" class="absolute top-[0vh] right-[0vw] w-[20vw] Z-5 opacity-100" />
      <!-- Shape 6 -->
      <img src="{{ asset('images/Blob3.svg') }}" alt="Shape 6" class="absolute top-[30vh] left-[32vw] w-[20vw] Z-5 opacity-100" />
    </div>

    <!-- Gray panel layered on top (40% width) -->
    <div class="absolute left-0 top-0 h-full w-[40%] bg-Gray z-10"></div>
    
    <!-- Image container with fixed positioning -->
    <div class="fixed inset-0 w-screen h-screen pointer-events-none z-20">
      <!-- Top-left circle image -->
      <img
        src="{{ asset('images/bunder2.svg') }}"
        alt="Top Circle"
        class="absolute top-[5vh] left-[-2vw] w-[15.73vw] h-[15.73vw]"
      />
  
      <!-- Bottom-center circle image -->
      <img
        src="{{ asset('images/bunder.svg') }}"
        alt="Bottom Circle"
        class="absolute bottom-[-1vh] left-[34.3%] transform -translate-x-1/2 w-[11.46vw] h-[11.46vw]"
      />
    </div>
    
    <!-- Login Form -->
    <div class="absolute left-0 top-0 w-[40%] h-full z-30 flex items-center justify-center">
      <div class="border-4 border-[#2b2b2e] rounded-xl p-8 w-[75%] max-w-3xl h-[40%] max-h-3xl text-white shadow-lg flex flex-col justify-center">
        <h2 class="text-3xl font-bold mb-2">Reset Password</h2>
        <p class="text-sm mb-6 text-gray-300">I got you bro</p>
        <form class="flex-grow flex flex-col justify-center">
          <div>
            <input type="text" placeholder="E-mail" class="w-full p-2 mb-4 rounded bg-gray-800 border border-gray-600 focus:outline-none" />
          </div>

          <div class="password-container mb-4">
            <input type="password" id="password" placeholder="New Password" class="w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" />
            <span class="toggle-password" onclick="togglePasswordVisibility('password')">
              <img src="{{ asset('images/eye-on.svg') }}" class="eye-icon show" alt="Show Password">
              <img src="{{ asset('images/eye-off.svg') }}" class="eye-off-icon" alt="Hide Password">
            </span>
          </div>
          
          <div class="password-container mb-4">
            <input type="password" id="confirmPassword" placeholder="Confirm New Password" class="w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" />
            <span class="toggle-password" onclick="togglePasswordVisibility('confirmPassword')">
              <img src="{{ asset('images/eye-on.svg') }}" class="eye-icon show" alt="Show Password">
              <img src="{{ asset('images/eye-off.svg') }}" class="eye-off-icon" alt="Hide Password">
            </span>
          </div>

          <div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded font-semibold">Change Password</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Welcome Text and Image Section -->
    <div class="absolute top-0 right-0 w-[60%] h-full z-30 flex items-center justify-center">
      <div class="text-center text-white px-8">
        <h1 class="text-7xl font-bold mb-2">Welcome to</h1>
        <h2 class="text-6xl font-semibold text-gray-200 mb-4">LANZADERA !</h2>
        <p class="text-sm text-gray-200 mb-8">We Got Your Back, Don't Worry</p>
        <img src="{{ asset('images/human.png') }}" alt="Human Illustration" class="w-[100%] max-w-3xl mx-auto" />
      </div>
    </div>

    <script>
    function togglePasswordVisibility(fieldId) {
      const input = document.getElementById(fieldId);
      const icon = input.nextElementSibling.querySelector('img');
      if (input.type === 'password') {
        input.type = 'text';
        icon.src = "{{ asset('/images/eye-off.svg') }}";
      } else {
        input.type = 'password';
        icon.src = "{{ asset('/images/eye-on.svg') }}";
      }
    }
    </script>
  </body>
</html>