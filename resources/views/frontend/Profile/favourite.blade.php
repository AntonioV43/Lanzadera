<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Favorit - Lanzadera</title>
  <!-- Link Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              Purple: '#E4D6FF',
              Gray: '#333437',
            },
            fontFamily: {
              prompt: ['Prompt', 'sans-serif'],
            },
          },
        },
      };
    </script>
</head>
<body class="bg-Purple font-sans pt-20 min-h-screen flex flex-col">
  <main class="flex-grow">

  <!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-8 font-prompt" style="background-color: rgba(146, 95, 226, 1)">
  <div class="flex items-center justify-between w-full max-w-6xl">
    <!-- Logo Container -->
<div class="flex items-center absolute left-8">
  <a href="/favourite">
    <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-24">
  </a>
</div>

    <!-- Menu Items -->
    <ul class="flex space-x-8 text-white font-medium mx-auto">
      <li><a href="/" class="hover:underline">Home</a></li>
      <li><a href="/categories" class="hover:underline">Categories</a></li>
      <li><a href="/favourite" class="hover:underline">Favourite</a></li>
      <li><a href="/my_order" class="hover:underline">My Order</a></li>
    </ul>

    <!-- Profile Button -->
    <a href="/profile" class="w-10 h-10 rounded-full border-2 border-white shadow absolute right-8 overflow-hidden">
      <img src="/images/profile.svg" alt="Profile" class="w-full h-full object-cover rounded-full">
    </a>
</nav>

    <!-- Cover Image -->
<div class="relative max-w-6xl mx-auto">
  <img src="/images/prau.jpg" alt="cover" class="w-full h-60 object-cover rounded-lg">
</div>

  <!-- Profile Content -->
<div class="max-w-6xl mx-auto px-6 pb-6 font-['Poppins'] relative z-10">
  <div class="grid grid-cols-4 gap-6">
    <!-- Sidebar -->
    <aside class="col-span-1 bg-white p-4 rounded-lg shadow relative" style="margin-top: -48px;">
      <div class="flex flex-col items-center text-center">
        <div class="w-24 h-24 rounded-full border-4 border-white shadow -mt-12 bg-white p-1">
          <img src="/images/profile.svg" alt="Profile" class="w-full h-full object-cover rounded-full">
        </div>
        <h2 class="text-lg font-bold mt-2">Aisha Bianca</h2>
        <p class="text-sm text-gray-600">@aiishaa.binc</p>
        <ul class="mt-6 w-full space-y-2 text-left">
          <li class="flex items-center space-x-2 p-2 hover:bg-purple-100 rounded cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <a href="/profile" class="text-sm">My Account</a>
          </li>
          <li class="flex items-center space-x-2 p-2 hover:bg-purple-100 rounded cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <a href="/my_order" class="text-sm">My Order</a>
          </li>
          <li class="flex items-center space-x-2 p-2 bg-purple-100 rounded cursor-pointer font-medium text-purple-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 16.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm">Favorit</span>
          </li>
          <li class="flex items-center space-x-2 p-2 hover:bg-purple-100 rounded cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <a href="/history" class="text-sm">History</a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- Konten Favorit -->
<section class="col-span-3 bg-white p-6 rounded-lg shadow mt-0">
  <h1 class="text-2xl font-bold mb-4 font-poppins">Favorit Anda</h1>

  <div id="favorites-list" class="space-y-4">

    <!-- Nusa Penida -->
    <div class="favorite-card flex items-center bg-purple-50 p-4 rounded-lg shadow">
      <img src="/images/NusaPenida1.jpeg" alt="Bali Trip" class="w-32 h-32 rounded-lg object-cover">
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold font-poppins">Liburan Seru Bali – Ubud & Nusa Penida</h2>
        <p class="text-sm text-gray-600 mt-1">Wisata budaya di Ubud (Tegallalang, Monkey Forest) & petualangan Nusa Penida.</p>
        <div class="flex items-center text-xs text-gray-700 space-x-4 mt-2">
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>5 Orang</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>5 Hari 4 Malam</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>Rp6.000.000/orang</span>
        </div>
      </div>
      <button onclick="removeFavorite(this)" class="ml-4 text-purple-500 text-xl hover:text-purple-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 16.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
      </button>
    </div>

    <!-- Borobudur -->
    <div class="favorite-card flex items-center bg-purple-50 p-4 rounded-lg shadow">
      <img src="/images/borobudur.jpg" alt="Borobudur Sunrise" class="w-32 h-32 rounded-lg object-cover">
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold font-poppins">Sunrise di Candi Borobudur & Desa Wisata</h2>
        <p class="text-sm text-gray-600 mt-1">Nikmati momen matahari terbit di Borobudur, dilanjutkan dengan wisata budaya di desa sekitarnya.</p>
        <div class="flex items-center text-xs text-gray-700 space-x-4 mt-2">
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>5 Orang</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>1 Hari</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>Rp1.150.000/orang</span>
        </div>
      </div>
      <button onclick="removeFavorite(this)" class="ml-4 text-purple-500 text-xl hover:text-purple-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 16.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
      </button>
    </div>

    <!-- Bromo -->
    <div class="favorite-card flex items-center bg-purple-50 p-4 rounded-lg shadow">
      <img src="/images/Bromo.webp" alt="Bromo Adventure" class="w-32 h-32 rounded-lg object-cover">
      <div class="ml-4 flex-1">
        <h2 class="text-lg font-semibold font-poppins">Petualangan Gunung Bromo</h2>
        <p class="text-sm text-gray-600 mt-1">Trip jeep pagi hari menuju kawah Bromo, Bukit Cinta, dan Pasir Berbisik. Cocok untuk petualang alam.</p>
        <div class="flex items-center text-xs text-gray-700 space-x-4 mt-2">
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>6 Orang</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>2 Hari 1 Malam</span>
          <span class="flex items-center"><svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>Rp2.000.000/orang</span>
        </div>
      </div>
      <button onclick="removeFavorite(this)" class="ml-4 text-purple-500 text-xl hover:text-purple-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 16.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
      </button>
    </div>

  </div>
</section>
  </div>
</div>
</main>

  <!-- Footer -->
<footer class="text-white mt-12 p-6 text-center font-prompt"
        style="background-image: url('/images/Footer.jpg'); background-size: cover; background-position: center;">
  <div class="space-x-4 mb-2">
    <a href="#" class="hover:underline">About</a>
    <a href="#" class="hover:underline">FAQ</a>
  </div>
  <div class="flex justify-center items-center space-x-6 mt-2">
    <a href="#" class="hover:text-purple-300" aria-label="Facebook">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a4 4 0 00-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 011-1h3V2z" />
      </svg>
    </a>
    <a href="#" class="hover:text-purple-300" aria-label="Instagram">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 6.5h.01" />
      </svg>
    </a>
    <a href="#" class="hover:text-purple-300" aria-label="Twitter">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 19c7.5 0 11.5-6.2 11.5-11.5v-.5A8.1 8.1 0 0022 4.5a8.4 8.4 0 01-2.357.646A4.1 4.1 0 0021.5 3a8.3 8.3 0 01-2.6.994A4.1 4.1 0 0012 8.5a11.6 11.6 0 01-8.4-4.3s-4 9 5 13c-2.3 1.6-4.8 2.1-7 1.9 9 5.3 20 0 20-11.5" />
      </svg>
    </a>
  </div>
  <p class="text-xs mt-4">&copy; 2025 LANZADERA</p>
</footer>
</body>
</html>