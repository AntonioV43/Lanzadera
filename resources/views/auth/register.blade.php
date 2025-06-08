<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup - LANZADERA</title>
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
    /* Popup animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .popup-animation {
      animation: fadeIn 0.3s ease-out forwards;
    }
    /* Loading spinner */
    .spinner {
      width: 24px;
      height: 24px;
      border: 3px solid rgba(255,255,255,.3);
      border-radius: 50%;
      border-top-color: #fff;
      animation: spin 1s ease-in-out infinite;
      display: inline-block;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
  </style>
</head>
<body class="h-screen m-0 p-0 overflow-hidden relative">

  <!-- Purple background -->
  <div class="absolute inset-0 bg-Purple z-0"></div>

  <!-- Decorative shapes -->
  <div class="fixed inset-0 z-0 pointer-events-none" id="purple-shapes">
    <img src="{{ asset('/images/Blob.svg') }}" class="absolute bottom-[10vh] right-[30vw] w-[15vw] z-3" />
    <img src="{{ asset('/images/Blob1.svg') }}" class="absolute top-[0vh] right-[20vw] w-[20vw]" />
    <img src="{{ asset('/images/Blob2.svg') }}" class="absolute top-[15vh] right-[0vw] w-[10vw]" />
    <img src="{{ asset('/images/Blob4.svg') }}" class="absolute bottom-[-35vh] right-[-5vw] w-[60vw] z-5" />
    <img src="{{ asset('/images/Blob5.svg') }}" class="absolute top-[0vh] right-[0vw] w-[20vw]" />
    <img src="{{ asset('/images/Blob3.svg') }}" class="absolute top-[30vh] left-[32vw] w-[20vw]" />
  </div>

  <!-- Left gray panel -->
  <div class="absolute left-0 top-0 h-full w-[40%] bg-Gray z-10"></div>

  <!-- Circle Images -->
  <div class="fixed inset-0 w-screen h-screen pointer-events-none z-20">
    <img src="{{ asset('/images/bunder2.svg') }}" class="absolute top-[5vh] left-[-2vw] w-[15.73vw]" />
    <img src="{{ asset('/images/bunder.svg') }}" class="absolute bottom-[-1vh] left-[34.3%] transform -translate-x-1/2 w-[11.46vw]" />
  </div>

  <!-- Signup Form -->
  <div class="absolute left-0 top-0 w-[40%] h-full z-30 flex items-center justify-center">
    <div class="bg-[#2b2b2e] bg-opacity-70 rounded-xl p-8 w-[75%] max-w-3xl h-[65%] text-white shadow-lg">
      <h2 class="text-3xl font-bold mb-2">Signup</h2>
      <p class="text-sm mb-6 text-gray-300">Just some details to get you in!</p>

      <form method="POST" action="{{ route('register') }}" id="signupForm">
        @csrf
        <input type="text" name="name" placeholder="Username" class="w-full p-2 mb-4 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
        
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-4 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
        
        <div class="password-container mb-4">
          <input type="password" id="password" name="password" placeholder="Password" class="w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
          <span class="toggle-password" onclick="togglePasswordVisibility('password')">
            <img src="{{ asset('/images/eye-off.svg') }}" class="w-5 h-5" alt="Toggle password visibility">
          </span>
        </div>

        <div class="password-container mb-4">
          <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password" class="w-full p-2 pr-10 rounded bg-gray-800 border border-gray-600 focus:outline-none" required>
          <span class="toggle-password" onclick="togglePasswordVisibility('confirmPassword')">
            <img src="{{ asset('/images/eye-off.svg') }}" class="w-5 h-5" alt="Toggle password visibility">
          </span>
        </div>

        <button type="submit" id="submitButton" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded font-semibold flex items-center justify-center">
          <span id="buttonText">Signup</span>
          <span id="spinner" class="spinner hidden ml-2"></span>
        </button>
      </form>

      <p class="mt-4 text-sm text-center text-gray-400">
        Already Registered? <a href="{{ route('login') }}" class="text-purple-400 hover:underline">Login</a>
      </p>
    </div>
  </div>

  <!-- Welcome Right Section -->
  <div class="absolute top-0 right-0 w-[60%] h-full z-30 flex items-center justify-center">
    <div class="text-center text-white px-8">
      <h1 class="text-7xl font-bold mb-2">Welcome to</h1>
      <h2 class="text-6xl font-semibold text-gray-200 mb-4">LANZADERA !</h2>
      <p class="text-sm text-gray-200 mb-8">Together With Us !</p>
      <img src="{{ asset('/images/human.png') }}" class="w-full max-w-3xl mx-auto" />
    </div>
  </div>

  <!-- Account Created Popup -->
  <div id="accountCreatedPopup" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4 popup-animation">
      <div class="text-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2">Account Created!</h3>
        <p class="text-gray-600 mb-6">Your account has been successfully created. You can now login to your account.</p>
        <button onclick="closePopup()" class="w-full bg-Purple text-white py-2 rounded font-semibold hover:bg-opacity-90 transition">
          Continue to Login
        </button>
      </div>
    </div>
  </div>

  <!-- Error Popup -->
  <div id="errorPopup" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-xl p-8 max-w-md w-full mx-4 popup-animation">
      <div class="text-center">
        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2" id="errorTitle">Error</h3>
        <p class="text-gray-600 mb-6" id="errorMessage">There was an error creating your account. Please try again.</p>
        <button onclick="closeErrorPopup()" class="w-full bg-Purple text-white py-2 rounded font-semibold hover:bg-opacity-90 transition">
          Try Again
        </button>
      </div>
    </div>
  </div>

  <script>
    function togglePasswordVisibility(fieldId) {
      const passwordInput = document.getElementById(fieldId);
      const toggleIcon = passwordInput.nextElementSibling.querySelector('img');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.src = "{{ asset('/images/eye-on.svg') }}";
      } else {
        passwordInput.type = 'password';
        toggleIcon.src = "{{ asset('/images/eye-off.svg') }}";
      }
    }

    // Handle form submission
    document.getElementById('signupForm').addEventListener('submit', async function(e) {
      e.preventDefault();
      
      const form = e.target;
      const submitButton = document.getElementById('submitButton');
      const buttonText = document.getElementById('buttonText');
      const spinner = document.getElementById('spinner');
      
      // Show loading state
      submitButton.disabled = true;
      buttonText.textContent = 'Creating Account...';
      spinner.classList.remove('hidden');
      
      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: new FormData(form),
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });
        
        const data = await response.json();
        
        if (response.ok) {
          // Account created successfully
          showAccountCreatedPopup();
        } else {
          // Show error message
          showError(data.message || 'There was an error creating your account');
        }
      } catch (error) {
        console.error('Error:', error);
        showError('Network error. Please check your connection and try again.');
      } finally {
        // Reset button state
        submitButton.disabled = false;
        buttonText.textContent = 'Signup';
        spinner.classList.add('hidden');
      }
    });

    function showAccountCreatedPopup() {
      const popup = document.getElementById('accountCreatedPopup');
      popup.classList.remove('hidden');
    }

    function closePopup() {
      const popup = document.getElementById('accountCreatedPopup');
      popup.classList.add('hidden');
      // Redirect to login page
      window.location.href = "{{ route('login') }}";
    }

    function showError(message) {
      const errorPopup = document.getElementById('errorPopup');
      const errorMessage = document.getElementById('errorMessage');
      
      errorMessage.textContent = message;
      errorPopup.classList.remove('hidden');
    }

    function closeErrorPopup() {
      const errorPopup = document.getElementById('errorPopup');
      errorPopup.classList.add('hidden');
    }
  </script>

</body>
</html>