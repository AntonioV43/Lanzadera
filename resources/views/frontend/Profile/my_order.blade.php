<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pesanan Saya - Lanzadera</title>
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
  <a href="/my_order">
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
          <li class="flex items-center space-x-2 p-2 bg-purple-100 rounded cursor-pointer font-medium text-purple-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <a href="/my_order" class="text-sm">My Order</a>
          </li>
          <li class="flex items-center space-x-2 p-2 hover:bg-purple-100 rounded cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 16.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <a href="/favourite" class="text-sm">Favourite</a>
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

    <!-- Tabel Pesanan -->
    <section class="col-span-3 bg-white p-6 rounded-lg shadow mt-0">
  <div class="flex justify-between items-center mb-4">
  <h1 class="text-2xl font-bold">Status Pemesanan</h1>
  <a href="/categories" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded whitespace-nowrap font-prompt transition-colors duration-200">
    + Pesan Baru
  </a>
</div>

  <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-gray-700 font-poppins border rounded-lg overflow-hidden">
      <thead style="background-color: rgba(132, 44, 226, 0.5);" class="text-white">
        <tr>
          <th class="py-3 px-4 text-left">Paket</th>
          <th class="py-3 px-4 text-left">Tanggal</th>
          <th class="py-3 px-4 text-left">Durasi</th>
          <th class="py-3 px-4 text-left">Total</th>
          <th class="py-3 px-4 text-left">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b hover:bg-purple-50">
          <td class="py-3 px-4">Explore Dieng</td>
          <td class="py-3 px-4">28 Mei 2025</td>
          <td class="py-3 px-4">2 Hari</td>
          <td class="py-3 px-4">Rp2.250.000</td>
          <td class="py-3 px-4"><span class="text-green-600 font-semibold">Lunas</span></td>
        </tr>
        <tr class="border-b hover:bg-purple-50">
          <td class="py-3 px-4">Bromo Sunrise</td>
          <td class="py-3 px-4">15 Juni 2025</td>
          <td class="py-3 px-4">3 Hari</td>
          <td class="py-3 px-4">Rp4.000.000</td>
          <td class="py-3 px-4"><span class="text-yellow-600 font-semibold">Menunggu Pembayaran</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
  </div>
</div>
</main>
  
<!-- Footer -->
<footer class="text-white p-6 text-center font-prompt"
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