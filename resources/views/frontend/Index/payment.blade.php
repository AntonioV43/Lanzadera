<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Details - Lanzadera</title>
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
<body class="bg-Purple font-prompt pt-20">

  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-4 lg:px-8 font-prompt" style="background-color: rgba(146, 95, 226, 1)">
    <div class="flex items-center justify-between w-full max-w-6xl">
      <!-- Logo -->
      <div class="flex items-center lg:absolute lg:left-8">
        <a href="#">
          <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-12 lg:h-24">
        </a>
      </div>

      <!-- Menu (desktop) -->
      <ul class="hidden lg:flex space-x-8 text-white font-medium mx-auto">
        <li><a href="/" class="hover:underline">Home</a></li>
        <li><a href="/categories" class="hover:underline">Categories</a></li>
        <li><a href="/favourite" class="hover:underline">Favourite</a></li>
        <li><a href="/my_order" class="hover:underline">My Order</a></li>
      </ul>

      <!-- Right side -->
      <div class="flex items-center gap-3 lg:absolute lg:right-8">
        
        <div class="w-10 h-10 shrink-0 rounded-full border-2 border-white shadow overflow-hidden">
          <img src="/images/profile.svg" alt="Profile" class="w-full h-full object-cover rounded-full">
        </div>
        
        <!-- Hamburger (mobile / tablet) -->
        <button id="menuBtn" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu"
                class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-md text-white bg-black/25 border border-white/60">
          <svg id="menuIconOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="menuIconClose" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Menu (mobile / tablet) -->
    <ul id="mobileMenu" class="hidden lg:hidden w-full max-w-6xl mt-3 rounded-xl bg-[#925FE2] text-white font-medium p-4 space-y-1 shadow-lg max-h-[calc(100vh-6rem)] overflow-y-auto">
      <li><a href="/" class="block py-2 hover:underline">Home</a></li>
        <li><a href="/categories" class="block py-2 hover:underline">Categories</a></li>
        <li><a href="/favourite" class="block py-2 hover:underline">Favourite</a></li>
        <li><a href="/my_order" class="block py-2 hover:underline">My Order</a></li>
      
    </ul>
  </nav>

  <!-- Main Section -->
  <section class="max-w-6xl mx-auto px-4 py-6 grid grid-cols-1 lg:grid-cols-3 gap-6 font-poppins">
    <!-- Left Section -->
    <div class="lg:col-span-2 space-y-6">
      <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 border border-purple-600 rounded-md text-sm font-medium text-purple-600 hover:bg-purple-50 transition-colors duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Back
      </a>

      <!-- Customer Info -->
      <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
        <h2 class="text-lg font-semibold border-b pb-2">Customer Information</h2>
        <div class="space-y-3">
          <div><label class="block text-sm font-medium mb-1" for="username">Username</label><input type="text" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
          <div><label class="block text-sm font-medium mb-1" for="email">Email</label><input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
          <div><label class="block text-sm font-medium mb-1" for="phone">Nomor HP</label><input type="tel" id="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
        </div>
      </div>

      <!-- Address Info -->
      <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
        <h2 class="text-lg font-semibold border-b pb-2">Address Information</h2>
        <div class="space-y-3">
          <div><label class="block text-sm font-medium mb-1" for="alamat">Alamat Lengkap</label><input type="text" id="alamat" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
            <div><label class="block text-sm font-medium mb-1" for="kodepos">Kode Pos</label><input type="text" id="kodepos" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
            <div><label class="block text-sm font-medium mb-1" for="kota">Kota/Kabupaten</label><input type="text" id="kota" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
            <div><label class="block text-sm font-medium mb-1" for="provinsi">Provinsi</label><input type="text" id="provinsi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-400"></div>
          </div>
        </div>
      </div>

      <!-- Payment Information -->
    <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
      <h2 class="text-lg font-semibold border-b pb-2">Payment Information</h2>

      <!-- Opsi Transfer Bank -->
      <button type="button" class="w-full flex items-start p-4 border rounded-md hover:bg-purple-50 focus:ring-2 focus:ring-purple-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <div class="ml-3 text-left">
          <p class="font-semibold">Transfer Bank</p>
          <p class="text-sm text-gray-600">BRI, BCA, Mandiri, BNI</p>
        </div>
      </button>

      <!-- E-Wallet -->
      <button type="button" class="w-full flex items-start p-4 border rounded-md hover:bg-purple-50 focus:ring-2 focus:ring-purple-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
        <div class="ml-3 text-left">
          <p class="font-semibold">E-Wallet</p>
          <p class="text-sm text-gray-600">Gopay, OVO, DANA, ShopeePay</p>
        </div>
      </button>

      <!-- Kartu Kredit -->
      <button type="button" class="w-full flex items-start p-4 border rounded-md hover:bg-purple-50 focus:ring-2 focus:ring-purple-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
        </svg>
        <div class="ml-3 text-left">
          <p class="font-semibold">Kartu Kredit</p>
          <p class="text-sm text-gray-600">Visa, Mastercard</p>
        </div>
      </button>

      <!-- QRIS -->
      <button type="button" class="w-full flex items-start p-4 border rounded-md hover:bg-purple-50 focus:ring-2 focus:ring-purple-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-700 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
        </svg>
        <div class="ml-3 text-left">
          <p class="font-semibold">QRIS</p>
          <p class="text-sm text-gray-600">Scan QR untuk bayar</p>
        </div>
      </button>
    </div>
  </div>


    <!-- Right Section -->
    <div class="lg:col-span-1">
      <div class="bg-white shadow-md rounded-xl overflow-hidden text-sm text-gray-800 flex flex-col h-full">
        <div class="bg-purple-500 text-white text-center px-4 py-3">
          <h3 class="text-lg font-semibold">Paket Travel Karimunjawa – Surga Tropis di Jawa Tengah</h3>
        </div>
        <div class="p-4 sm:p-6 flex-1 flex flex-col justify-start space-y-5">
          <img src="/images/KarimunJawa.jpg" alt="Karimunjawa" class="rounded-md w-full h-40 object-cover">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-purple-50 border border-purple-200 rounded-md p-4 text-center">
              <p class="text-xs text-gray-500 font-medium">Berangkat</p>
              <input type="date" class="mt-1 w-full text-sm text-center border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-400">
            </div>
            <div class="bg-purple-50 border border-purple-200 rounded-md p-4 text-center">
              <p class="text-xs text-gray-500 font-medium">Pulang</p>
              <input type="date" class="mt-1 w-full text-sm text-center border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-400">
            </div>
          </div>
          <div class="bg-purple-50 border border-purple-200 rounded-md p-4 flex items-center justify-between">
            <div>
              <p class="text-sm font-bold text-gray-700">Jumlah Anggota</p>
              <p class="text-sm font-semibold text-purple-700">2 Dewasa, 1 Anak</p>
            </div>
            <svg class="w-6 h-6 text-purple-700" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 14a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0h3.2a1.8 1.8 0 011.8 1.8V18M8 14H4.8a1.8 1.8 0 00-1.8 1.8V18m4-12a2 2 0 114 0 2 2 0 01-4 0zm8 0a2 2 0 114 0 2 2 0 01-4 0z" />
            </svg>
          </div>

          <!-- Rincian Pembayaran -->
          <div class="bg-purple-50 border border-purple-200 rounded-md p-4 font-prompt">
            <h4 class="text-sm font-semibold mb-2">Rincian Pembayaran</h4>
            <div class="bg-white p-3 rounded-md shadow-sm divide-y text-sm">
              <div class="flex justify-between py-1">
                <span>Tiket Dewasa</span>
                <span>Rp4.500.000 <span class="text-gray-400">×2</span></span>
              </div>
              <div class="flex justify-between py-1">
                <span>Tiket Anak</span>
                <span>Rp3.000.000 <span class="text-gray-400">×1</span></span>
              </div>
              <div class="flex justify-between py-1">
                <span>Kamera Underwater</span>
                <span>Rp200.000 <span class="text-gray-400">×2</span></span>
              </div>
              <div class="flex justify-between py-1">
                <span>Pajak Service</span>
                <span>Rp50.000 <span class="text-gray-400">×3</span></span>
              </div>
            </div>
          </div>
            <div class="flex justify-between mt-4 text-base font-semibold">
              <span>Total Pembayaran</span>
              <span class="text-purple-700">Rp 12.550.000</span>
            </div>
            <button class="mt-4 w-full bg-purple-600 text-white py-2 rounded-md font-semibold hover:bg-purple-700 flex justify-center items-center gap-2">
              Pay Now
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </button>


          <!-- Catatan Penting -->
          <div class="text-xs bg-yellow-50 border-l-4 border-yellow-400 text-yellow-900 p-4 rounded">
            <strong class="block uppercase mb-1">Catatan Penting!!!</strong>
            <ul class="list-disc ml-5 space-y-1">
              <li>Konfirmasi booking via email dalam 1x24 jam.</li>
              <li>Batas pembayaran: 1x24 jam setelah pemesanan.</li>
              <li>Pembatalan gratis 7 hari sebelum keberangkatan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

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
<script>
  // Mobile navigation toggle
  (function () {
    var btn = document.getElementById('menuBtn');
    var menu = document.getElementById('mobileMenu');
    if (!btn || !menu) return;
    var iconOpen = document.getElementById('menuIconOpen');
    var iconClose = document.getElementById('menuIconClose');
    function setOpen(open) {
      menu.classList.toggle('hidden', !open);
      iconOpen.classList.toggle('hidden', open);
      iconClose.classList.toggle('hidden', !open);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    }
    btn.addEventListener('click', function () { setOpen(menu.classList.contains('hidden')); });
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setOpen(false); });
    });
    window.addEventListener('resize', function () { if (window.innerWidth >= 1024) setOpen(false); });
  })();
</script>
</body>
</html>