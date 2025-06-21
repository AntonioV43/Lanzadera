<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Details - Lanzadera</title>
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
  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-8 font-prompt" style="background-color: rgba(146, 95, 226, 1)">
    <div class="flex items-center justify-between w-full max-w-6xl">
      <div class="flex items-center absolute left-8">
        <a href="/booking">
          <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-24">
        </a>
      </div>
      <ul class="flex space-x-8 text-white font-medium mx-auto">
        <li><a href="/" class="hover:underline">Home</a></li>
        <li><a href="/categories" class="hover:underline">Categories</a></li>
        <li><a href="/favourite" class="hover:underline">Favourite</a></li>
        <li><a href="/my_order" class="hover:underline">My Order</a></li>
      </ul>
      <a href="/profile" class="w-10 h-10 rounded-full border-2 border-white shadow absolute right-8 overflow-hidden">
        <img src="/images/profile.svg" alt="Profile" class="w-full h-full object-cover rounded-full">
      </a>
    </div>
  </nav>

  <section class="max-w-6xl mx-auto px-4 py-6 grid grid-cols-1 lg:grid-cols-3 gap-6 font-poppins">

  <!-- Left Section -->
  <div class="lg:col-span-2 space-y-6 font-[Poppins]">
    <!-- Back Button -->
    <a href="/categories" class="inline-flex items-center px-4 py-2 border border-purple-600 rounded-md text-sm font-medium text-purple-600 hover:bg-purple-50 transition-colors duration-200">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
      </svg>
      Back
    </a>

    <!-- Image Grid -->
    <div class="grid gap-4 w-full md:w-4/5">
      <img src="/images/KarimunJawa.jpg" alt="Karimunjawa View" class="rounded-xl w-full h-64 object-cover">
      <div class="grid grid-cols-2 gap-4">
        <img src="/images/KarimunJawa1.webp" alt="Pantai Karimun" class="rounded-xl w-full h-32 object-cover">
        <img src="/images/KarimunJawa2.jpg" alt="Pulau Karimun" class="rounded-xl w-full h-32 object-cover">
      </div>
    </div>

    <!-- Title & Info -->
<div>
  <h1 class="text-2xl font-bold text-gray-800">Paket Travel Karimunjawa – Surga Tropis di Jawa Tengah</h1>
  <p class="text-purple-700 text-sm mt-1 flex items-center gap-1">
    <span>★ 5 (10 reviews)</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
    </svg>
    <span>Kepulauan Karimunjawa, Jawa Tengah</span>
  </p>
</div>

    <!-- Jadwal Perjalanan -->
<div class="border-t border-b border-300 py-4 max-w-2xl w-full my-6">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Jadwal Perjalanan</h2>
  <div class="grid grid-cols-3 gap-0">
    <!-- Berangkat -->
    <div class="flex items-start gap-2 px-3">
      <div class="bg-purple-100 p-2 rounded-full shrink-0">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
        </svg>
      </div>
      <div class="text-sm leading-snug">
        <p class="font-medium text-gray-600">Berangkat</p>
        <p class="font-semibold text-gray-800">07/11/2025</p>
      </div>
    </div>

    <!-- Durasi -->
    <div class="flex items-start gap-2 px-3">
      <div class="bg-purple-100 p-2 rounded-full shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div class="text-sm leading-snug">
        <p class="font-medium text-gray-600">Durasi</p>
        <p class="font-semibold text-gray-800">4 Hari 3 Malam</p>
      </div>
    </div>

    <!-- Harga Tiket -->
    <div class="flex items-start gap-2 px-3">
      <div class="bg-purple-100 p-2 rounded-full shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
        </svg>
      </div>
      <div class="text-sm leading-snug">
        <p class="font-medium text-gray-600">Harga Tiket</p>
        <p class="font-semibold text-gray-800">Rp4.500.000/orang</p>
      </div>
    </div>
  </div>
</div>

    <!-- Deskripsi -->
    <div>
      <h2 class="text-2xl font-semibold mb-2">Deskripsi Paket</h2>
      <p class="text-sm mb-2 font-medium">Fasilitas:</p>
      <ul class="list-disc ml-6 text-sm text-gray-700 space-y-1">
        <li>Penginapan resort tepi pantai dengan kamar ber-AC</li>
        <li>Makan 3x sehari (termasuk seafood BBQ)</li>
        <li>Perlengkapan snorkeling & life jacket</li>
        <li>Transportasi kapal cepat (PP Jepara–Karimunjawa)</li>
      </ul>
      <p class="text-sm mt-4 font-medium">Aktivitas:</p>
      <ul class="list-disc ml-6 text-sm text-gray-700 space-y-1">
        <li>Island hopping ke Pulau Menjangan Kecil, Cemara, & Geleyang</li>
        <li>Snorkeling di spot terbaik (Barracuda Point, Gosong Cemara)</li>
        <li>Trekking ke Bukit Love untuk sunset panorama 360°</li>
        <li>Kunjungan ke Desa Kemojan (interaksi budaya lokal)</li>
      </ul>
    </div>
  </div>

  <!-- Wrapper -->
<div class="max-w-sm w-full font-[Poppins] shadow-lg rounded-xl overflow-hidden bg-white text-sm text-gray-800">

  <!-- Header Harga -->
  <div class="bg-purple-500 px-4 py-4 text-center text-white" style="background-color: rgba(146, 95, 226, 0.7)">
    <h3 class="text-lg font-bold">
      Rp4.500.000 <span class="text-sm font-normal">(Early Bird)</span>
    </h3>
  </div>

  <!-- Konten -->
  <div class="p-6 space-y-5">

    <!-- Form Tanggal -->
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block mb-1 font-medium">Berangkat</label>
        <input type="date" value="2025-11-07" class="w-full px-3 py-2 border border-purple-300 rounded-md bg-purple-50 text-purple-700" id="departure-date">
      </div>
      <div>
        <label class="block mb-1 font-medium">Pulang</label>
        <input type="date" value="2025-11-12" class="w-full px-3 py-2 border border-purple-300 rounded-md bg-purple-50 text-purple-700" id="return-date">
      </div>
    </div>

    <!-- Tiket Dewasa -->
    <div class="flex items-center justify-between">
      <div>
        <p class="font-medium">Tiket Dewasa</p>
        <p class="text-xs text-purple-500">Rp4.500.000/orang</p>
      </div>
      <div class="flex items-center space-x-2">
        <button class="w-7 h-7 rounded-full bg-purple-200 text-purple-700 font-bold" onclick="changeCount('adult', -1)">−</button>
        <span id="adult-count">0</span>
        <button class="w-7 h-7 rounded-full bg-purple-200 text-purple-700 font-bold" onclick="changeCount('adult', 1)">+</button>
      </div>
    </div>

    <!-- Tiket Anak -->
    <div class="flex items-center justify-between">
      <div>
        <p class="font-medium">Tiket Anak <span></p>
        <p class="text-xs text-purple-500">Rp3.000.000/anak</p>
      </div>
      <div class="flex items-center space-x-2">
        <button class="w-7 h-7 rounded-full bg-purple-200 text-purple-700 font-bold" onclick="changeCount('child', -1)">−</button>
        <span id="child-count">0</span>
        <button class="w-7 h-7 rounded-full bg-purple-200 text-purple-700 font-bold" onclick="changeCount('child', 1)">+</button>
      </div>
    </div>

    <!-- Layanan Tambahan -->
<div class="border-t border-purple-200 pt-4">
  <h4 class="font-semibold mb-3 text-gray-800">Layanan Tambahan</h4>

  <label class="flex items-center justify-between mb-3 cursor-pointer text-sm">
    <span class="text-purple-800">Tour Dokumentasi Profesional</span>
    <div class="flex items-center space-x-3">
      <span class="text-purple-800">Rp1.500.000</span>
      <input type="checkbox" id="tour-check" class="accent-purple-500 w-4 h-4 rounded-full" onchange="calculateTotal()">
    </div>
  </label>

  <label class="flex items-center justify-between mb-3 cursor-pointer text-sm">
  <span class="text-purple-800">Kamera Underwater</span>
  <div class="flex items-center space-x-3">
    <span class="text-purple-800">Rp200.000</span>
    <input type="checkbox" id="camera-check" class="accent-purple-500 w-4 h-4 rounded-full" onchange="calculateTotal()">
  </div>
</label>

  <label class="flex items-center justify-between cursor-pointer text-sm">
    <span class="text-purple-800">Pemandu Wisata Bahasa</span>
    <div class="flex items-center space-x-3">
      <span class="text-purple-800">Rp500.000</span>
      <input type="checkbox" id="guide-check" class="accent-purple-500 w-4 h-4 rounded-full" onchange="calculateTotal()">
    </div>
  </label>
</div>

    <!-- Rincian Pembayaran -->
     <p class="font-semibold">Rincian Pembayaran </p> 
    <div class="bg-purple-50 border border-purple-200 rounded-md px-4 py-3 space-y-1" id="summary"></div>

    <!-- Total -->
    <p class="font-semibold">Total Pembayaran <span class="float-right text-purple-700 font-bold">Rp <span id="total">0</span></span></p>

    <!-- Tombol -->
    <button class="mt-3 w-full py-2 rounded-xl text-white bg-purple-600 hover:bg-purple-700 font-semibold transition" onclick="calculateAndRedirect()">Book Ticket →</button>
  </div>
</div>

<script>
  let adultCount = 0;
  let childCount = 0;

  function changeCount(type, delta) {
    if (type === 'adult') {
      adultCount = Math.max(0, adultCount + delta);
      document.getElementById('adult-count').textContent = adultCount;
    } else {
      childCount = Math.max(0, childCount + delta);
      document.getElementById('child-count').textContent = childCount;
    }
    calculateTotal();
  }

  function calculateTotal() {
    const camera = document.getElementById('camera-check').checked;
    const tour = document.getElementById('tour-check').checked;
    const guide = document.getElementById('guide-check').checked;

    const hargaDewasa = 4500000;
    const hargaAnak = 3000000;
    const hargaKamera = 200000;
    const hargaTour = 1500000;
    const hargaGuide = 500000;
    const pajakPerOrang = 50000;

    let total = (adultCount * hargaDewasa) + (childCount * hargaAnak);
    let summaryHTML = '';

    if (adultCount > 0)
      summaryHTML += `<p>Tiket Dewasa <span class="float-right">Rp ${(hargaDewasa * adultCount).toLocaleString()}</span></p>`;
    if (childCount > 0)
      summaryHTML += `<p>Tiket Anak <span class="float-right">Rp ${(hargaAnak * childCount).toLocaleString()}</span></p>`;

    if (camera) {
  total += hargaKamera;
  summaryHTML += `<p>Kamera Underwater <span class="float-right">Rp ${hargaKamera.toLocaleString()}</span></p>`;
  }

    if (tour) {
      total += hargaTour;
      summaryHTML += `<p>Tour Dokumentasi <span class="float-right">Rp ${hargaTour.toLocaleString()}</span></p>`;
    }

    if (guide) {
      total += hargaGuide;
      summaryHTML += `<p>Pemandu Wisata <span class="float-right">Rp ${hargaGuide.toLocaleString()}</span></p>`;
    }

    const pajak = (adultCount + childCount) * pajakPerOrang;
    total += pajak;
    summaryHTML += `<p>Pajak Service  (@Rp50.000) <span class="float-right">Rp ${pajak.toLocaleString()}</span></p>`;

    document.getElementById('summary').innerHTML = summaryHTML;
    document.getElementById('total').textContent = total.toLocaleString();
  }

  window.onload = calculateTotal;
</script>
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
  <script>
function calculateAndRedirect() {
    calculateTotal(); // Call your existing function
    window.location.href = '/payment'; // Redirect to payment page
}
</script>
</body>
</html>