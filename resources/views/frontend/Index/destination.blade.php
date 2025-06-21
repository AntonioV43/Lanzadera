<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Destination Categories - Lanzadera</title>
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
<body class="bg-Purple font-sans pt-20">
  <!-- Navbar Fixed -->
  <nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-8 font-prompt" style="background-color: rgba(146, 95, 226, 1)">
    <div class="flex items-center justify-between w-full max-w-6xl">
      <div class="flex items-center absolute left-8">
        <a href="#">
          <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-24">
        </a>
      </div>
      <ul class="flex space-x-8 text-white font-medium mx-auto">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">Categories</a></li>
        <li><a href="#" class="hover:underline">Favorit</a></li>
        <li><a href="#" class="hover:underline">Pesanan</a></li>
      </ul>
      <div class="w-10 h-10 rounded-full border-2 border-white shadow absolute right-8 overflow-hidden">
        <img src="/images/profile.svg" alt="Profile" class="w-full h-full object-cover rounded-full">
      </div>
    </div>
  </nav>

<!-- Hero Section -->
<section class="relative h-[480px] w-full bg-cover bg-center" style="background-image: url('/images/gunung.jpg'); margin-top: -80px;">
  <!-- Overlay dengan teks -->
  <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-center text-white font-prompt px-4">
    <h1 class="text-4xl sm:text-5xl font-semibold leading-tight mb-4">
      Let's Make Your<br><span class="text-purple-300">Dream Vacation</span>
    </h1>
  </div>
</section>

<!-- Floating Form -->
<div class="relative z-10 -mt-12 flex justify-center">
  <div class="bg-white shadow-lg rounded-full px-6 py-4 flex flex-wrap justify-center items-center gap-4 w-[90%] max-w-5xl">
    <!-- Location Input with Icon -->
    <div class="relative">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
      <input type="text" placeholder="Where do you want to go?" class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-64 text-sm text-gray-700" />
    </div>
    
    <!-- Date Input with Icon -->
    <div class="relative">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
      <input type="date" class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-40 text-sm text-gray-700" />
    </div>
    
    <!-- Budget Input with Icon -->
<div class="relative">
  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </div>
  <input 
    type="text" 
    placeholder="Type your budget" 
    class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-40 text-sm text-gray-700 placeholder-gray-400" 
  />
</div>
    
    <!-- Search Button with Icon -->
    <button class="bg-purple-500 text-white px-6 py-2 rounded-full font-semibold hover:bg-purple-600 text-sm flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
      Explore Now
    </button>
  </div>
</div>


<!-- Main Content Section -->
<section class="max-w-7xl mx-auto px-6 py-12 font-prompt">

  <!-- Main Listings -->
<main class="w-full max-w-5xl mx-auto space-y-6">
  <!-- Card 1 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/KarimunJawa.jpg" alt="Karimunjawa" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Paket Travel Karimunjawa – Surga Tropis di Jawa Tengah</h2>
        <p class="text-sm text-gray-700 mt-1">"Maladewa-nya Jawa" dengan pantai pasir putih & snorkeling memukau.</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          4 Hari 3 Malam
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp4.500.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/RajaAmpat.png" alt="Raja Ampat" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Eksplor Raja Ampat – Surga Bawah Laut</h2>
        <p class="text-sm text-gray-700 mt-1">Nikmati keindahan gugusan pulau eksotis dengan pasir putih, air jernih, dan kekayaan terumbu karang terbaik di dunia.</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          7 Hari 
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp16.000.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/NusaPenida1.jpeg" alt="Raja Ampat" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Liburan Seru Bali – Ubud & Nusa Penida</h2>
        <p class="text-sm text-gray-700 mt-1">Wisata budaya di Ubud (Tegallalang, Monkey Forest) & petualangan Nusa Penida.</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          5 Hari 4 Malam 
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp6.000.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>

  <!-- Card 4 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/Dieng.jpg" alt="Raja Ampat" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Eksplor Dieng – Negeri di Atas Awan</h2>
        <p class="text-sm text-gray-700 mt-1">Nikmati keindahan negeri yang diselimuti awan, Dieng, tempat yang sejuk, damai, dan menyenangkan.</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          3 Hari 2 Malam
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp1.500.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/PulauLabengki.jpg" alt="Raja Ampat" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Eksplor Surga Tersembunyi – Pulau Labengki</h2>
        <p class="text-sm text-gray-700 mt-1">Sensasikan keindahan laut biru jernih, pantai berpasir putih, dan alam bawah laut yang memukau di Sulawesi Tenggara.</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          5 Hari 4 Malam
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp10.000.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>

  <!-- Card 6 -->
  <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
    <img src="/images/PulauKomodo.jpg" alt="Raja Ampat" class="w-full h-60 object-cover rounded-lg">
    <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
      <div>
        <h2 class="text-xl font-semibold">Petualangan Eksotis Flores – Komodo dan Pulau Padar</h2>
        <p class="text-sm text-gray-700 mt-1">Jelajahi Taman Nasional Komodo, temui hewan purba Komodo, dan saksikan sunset spektakuler di Pulau Padar</p>
      </div>
      <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          5 Orang
        </span>
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          4 Hari 
        </span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <span class="font-semibold text-purple-600">Rp8.000.000/orang</span>
        <button class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
          Book Ticket
        </button>
      </div>
    </div>
  </div>
</main>
</section>

  <!-- Footer -->
  <footer class="text-white mt-12 p-6 text-center font-prompt" style="background-image: url('/images/Footer.jpg'); background-size: cover; background-position: center;">
    <div class="space-x-4 mb-2">
      <a href="#" class="hover:underline">About</a>
      <a href="#" class="hover:underline">FAQ</a>
    </div>
    <div class="flex justify-center items-center space-x-6 mt-2">
      <a href="#" class="hover:text-purple-300" aria-label="Facebook">
        <!-- Facebook SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a4 4 0 00-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 011-1h3V2z" />
        </svg>
      </a>
      <a href="#" class="hover:text-purple-300" aria-label="Instagram">
        <!-- Instagram SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 6.5h.01" />
        </svg>
      </a>
      <a href="#" class="hover:text-purple-300" aria-label="Twitter">
        <!-- Twitter SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 19c7.5 0 11.5-6.2 11.5-11.5v-.5A8.1 8.1 0 0022 4.5a8.4 8.4 0 01-2.357.646A4.1 4.1 0 0021.5 3a8.3 8.3 0 01-2.6.994A4.1 4.1 0 0012 8.5a11.6 11.6 0 01-8.4-4.3s-4 9 5 13c-2.3 1.6-4.8 2.1-7 1.9 9 5.3 20 0 20-11.5" />
        </svg>
      </a>
    </div>
    <p class="text-xs mt-4">&copy; 2025 LANZADERA</p>
  </footer>
</body>
</html>
