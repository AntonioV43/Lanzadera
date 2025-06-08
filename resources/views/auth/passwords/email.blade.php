{{-- resources/views/forgot-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
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
      @keyframes slideIn {
        from {bottom: -100px; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
      }
      @keyframes slideOut {
        from {bottom: 30px; opacity: 1;}
        to {bottom: -100px; opacity: 0;}
      }
      .popup {
        animation: slideIn 0.5s forwards, slideOut 0.5s forwards 2.5s;
      }
    </style>
  </head>
  <body class="h-screen m-0 p-0 overflow-hidden relative">
    <!-- Popup Notification -->
    @if (session('status'))
    <div class="fixed left-1/2 transform -translate-x-1/2 bottom-8 z-50 popup">
      <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        {{ session('status') }}
      </div>
    </div>
    @endif

    <div class="absolute inset-0 bg-Purple z-0"></div>

    <div class="fixed inset-0 z-0 pointer-events-none" id="purple-shapes">
      <img src="{{ asset('images/Blob.svg') }}" class="absolute bottom-[10vh] right-[30vw] w-[15vw] z-3 opacity-100" />
      <img src="{{ asset('images/Blob1.svg') }}" class="absolute top-[0vh] right-[20vw] w-[20vw] opacity-100" />
      <img src="{{ asset('images/Blob2.svg') }}" class="absolute top-[15vh] right-[0vw] w-[10vw] opacity-100" />
      <img src="{{ asset('images/Blob4.svg') }}" class="absolute bottom-[-35vh] right-[-5vw] w-[60vw] z-5 opacity-100" />
      <img src="{{ asset('images/Blob5.svg') }}" class="absolute top-[0vh] right-[0vw] w-[20vw] Z-5 opacity-100" />
      <img src="{{ asset('images/Blob3.svg') }}" class="absolute top-[30vh] left-[32vw] w-[20vw] Z-5 opacity-100" />
    </div>

    <div class="absolute left-0 top-0 h-full w-[40%] bg-Gray z-10"></div>

    <div class="fixed inset-0 w-screen h-screen pointer-events-none z-20">
      <img src="{{ asset('images/bunder2.svg') }}" class="absolute top-[5vh] left-[-2vw] w-[15.73vw] h-[15.73vw]" />
      <img src="{{ asset('images/bunder.svg') }}" class="absolute bottom-[-1vh] left-[34.3%] transform -translate-x-1/2 w-[11.46vw] h-[11.46vw]" />
    </div>

    <div class="absolute left-0 top-0 w-[40%] h-full z-30 flex items-center justify-center">
      <div class="border-4 border-[#2b2b2e] rounded-xl p-8 w-[75%] max-w-3xl h-[40%] max-h-3xl text-white shadow-lg flex flex-col justify-center">
        <h2 class="text-3xl font-bold mb-2">Forgot Password ?</h2>
        <p class="text-sm mb-6 text-gray-300">Please Enter Your E-mail !</p>
        <form class="flex-grow flex flex-col justify-center" method="POST" action="{{ route('password.email') }}">
          @csrf
          <div>
            <input type="email" name="email" required placeholder="example@email.com" class="w-full p-2 mb-4 rounded bg-gray-800 border border-gray-600 focus:outline-none" />
          </div>
          <div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded font-semibold">Reset Password</button>
            <p class="mt-4 text-sm text-center text-gray-400">
              Don't have an account? <a href="{{ route('register') }}" class="text-purple-400 hover:underline">Sign Up</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <div class="absolute top-0 right-0 w-[60%] h-full z-30 flex items-center justify-center">
      <div class="text-center text-white px-8">
        <h1 class="text-7xl font-bold mb-2">Welcome to</h1>
        <h2 class="text-6xl font-semibold text-gray-200 mb-4">LANZADERA !</h2>
        <p class="text-sm text-gray-200 mb-8">We Got Your Back, Don't Worry</p>
        <img src="{{ asset('images/human.png') }}" class="w-[100%] max-w-3xl mx-auto" />
      </div>
    </div>
  </body>
</html>