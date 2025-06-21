<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lanzadera</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#E4D6FF] text-gray-900 font-sans">

    <!-- Hero Section -->
    <div
      class="relative h-screen bg-cover bg-center"
      style="background-image: url('your-hero-image.jpg');"
    >
      <!-- Overlay -->
      <div class="absolute inset-0 bg-[url('/images/gunung.jpg')] bg-cover bg-center"></div>
      <!-- Navbar -->
      <nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-8 font-prompt" style="background-color: rgba(146, 95, 226, 1);">
        <div class="flex items-center justify-between w-full max-w-6xl">
            <!-- Logo -->
            <div class="flex items-center absolute left-8">
                <a href="#">
                    <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-24">
                </a>
            </div>

            <!-- Menu -->
            <ul class="flex space-x-8 text-white font-medium mx-auto">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Discover</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>

            <!-- Auth -->
            <div class="flex items-center space-x-4 absolute right-8">
        <a href="#" class="px-4 py-2 text-white hover:underline">Login</a>
        <a href="#" class="px-4 py-2 bg-white text-purple-600 rounded-md hover:bg-gray-100 transition">Sign Up</a>
            </div>
        </div>
      </nav>

      <!-- Headline -->
      <div class="relative z-10 flex flex-col items-center justify-center text-center h-[calc(100vh-120px)]">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
          Let's Make Your <br />
          <span class="text-purple-200">Dream Vacation</span>
        </h1>
      </div>

      <!-- Search Bar -->
<div class="relative z-10 flex justify-center px-4">
  <div class="bg-white text-gray-900 p-6 rounded-full flex flex-wrap items-center gap-6 shadow-lg w-full max-w-5xl">
    <!-- Location Section -->
    <div class="flex items-center space-x-3 px-4 border-r border-gray-200">
      <svg class="w-5 h-5 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414M15 11a4 4 0 11-8 0 4 4 0 018 0z"></path>
      </svg>
      <div class="min-w-[180px]">
        <p class="text-sm font-semibold">Location</p>
        <input type="text" placeholder="Where to go?" class="w-full text-sm bg-transparent focus:outline-none placeholder-gray-400" />
      </div>
    </div>

    <!-- Date Section -->
    <div class="flex items-center space-x-3 px-4 border-r border-gray-200">
      <svg class="w-5 h-5 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
      </svg>
      <div class="min-w-[150px]">
        <p class="text-sm font-semibold">Date</p>
        <input type="date" class="w-full text-sm bg-transparent focus:outline-none" />
      </div>
    </div>

    <!-- Pricing Section -->
    <div class="flex items-center space-x-3 px-4">
      <svg class="w-5 h-5 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2M4 6h16M4 10h16M4 14h16M4 18h16"></path>
      </svg>
      <div class="min-w-[180px]">
        <p class="text-sm font-semibold">Pricing</p>
        <select class="w-full text-sm bg-transparent focus:outline-none">
          <option>Choose your budget</option>
          <option>$100 - $500</option>
          <option>$500 - $1000</option>
          <option>$1000+</option>
        </select>
      </div>
    </div>

    <!-- Search Button -->
    <button class="ml-auto bg-purple-600 text-white px-6 py-3 rounded-full font-bold hover:bg-purple-700 transition whitespace-nowrap">
      🔍 Explore Now
    </button>
  </div>
</div>
    </div>

    <!-- Category Cards + Destination Section -->
<div class="min-h-screen bg-[#E4D6FF] flex flex-col items-center justify-center space-y-12 py-12 px-4">
  <!-- Destination Categories Section -->
  <div class="w-full max-w-5xl space-y-8">
    <h2 class="text-3xl font-bold text-gray-800 text-center">Destination Categories</h2>
    
    <!-- Category Cards -->
    <div class="flex flex-wrap justify-center gap-6">
      <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-red-300 hover:scale-105 transition-transform duration-300 text-center w-56 h-56 flex flex-col items-center justify-center">
        <img src="/images/indo.svg" alt="Indonesian Adventures" class="mx-auto w-16 h-16" />
        <p class="mt-4 font-semibold text-lg">Indonesian Adventures</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-purple-400 hover:scale-105 transition-transform duration-300 text-center w-56 h-56 flex flex-col items-center justify-center">
        <img src="/images/Asia.svg" alt="Asian Wonders" class="mx-auto w-16 h-16" />
        <p class="mt-4 font-semibold text-lg">Asian Wonders</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-blue-400 hover:scale-105 transition-transform duration-300 text-center w-56 h-56 flex flex-col items-center justify-center">
        <img src="/images/urban.svg" alt="Urban Explorations" class="mx-auto w-16 h-16" />
        <p class="mt-4 font-semibold text-lg">Urban Explorations</p>
      </div>
    </div>
  </div>

  <!-- Featured Destination -->
<div class="relative w-full max-w-5xl">
  <!-- Video Player Section -->
  <div class="relative rounded-lg overflow-hidden">
    <!-- Video Thumbnail (shown by default) -->
    <div id="videoThumbnail" class="cursor-pointer">
      <img src="/images/banff.jpg" alt="Video Thumbnail" class="rounded-lg w-full object-cover h-[400px]">
      <!-- Play Button -->
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="bg-white bg-opacity-60 p-4 rounded-full hover:bg-opacity-80 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
            <path d="M6 4l12 6-12 6V4z"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Video Container (hidden by default) -->
    <div id="videoContainer" class="hidden relative w-full h-[400px] bg-black">
      <iframe id="videoPlayer" class="w-full h-full" src="" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
      <button id="closeVideo" class="absolute top-4 right-4 bg-white bg-opacity-30 text-white p-2 rounded-full hover:bg-opacity-50 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Description Card - Now positioned below the video -->
  <div class="bg-white p-6 flex flex-col md:flex-row justify-between items-center rounded-b-lg mt-4">
    <div class="mb-4 md:mb-0">
      <h2 class="text-xl font-bold">Take The Best Place</h2>
      <p class="text-sm mt-1 text-gray-700 max-w-xl">
        Plan a perfect getaway in a place where the sun shines all year.
        Explore pristine beaches, enjoy relaxed activities, and pamper
        yourself at the many wellness retreats
      </p>
    </div>
    <a href="#" class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 transition">See More</a>
  </div>
</div>

<!-- Popular Destinations Section -->
<div class="w-full min-h-screen bg-[#E4D6FF] py-16 px-4">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Popular Destinations</h2>
    
    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-full">
      <!-- Featured Big Card (Left) -->
      <div class="md:col-span-8 row-span-2 relative rounded-2xl overflow-hidden group">
        <img src="/images/swiss.jpg" alt="Switzerland" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
          <h3 class="text-3xl font-bold text-white">Switzerland</h3>
          <p class="text-white/90 mt-2">Alpine wonders and charming villages</p>
          <button class="mt-4 bg-purple-600 text-white px-6 py-2 rounded-full font-medium hover:bg-purple-700 transition self-start">
            Explore
          </button>
        </div>
      </div>

      <!-- Top Right Card -->
      <div class="md:col-span-4 relative rounded-2xl overflow-hidden group h-64">
        <img src="/images/maldives.jpg" alt="Maldives" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6">
          <h3 class="text-xl font-bold text-white">Maldives</h3>
          <p class="text-white/80 text-sm mt-1">Tropical paradise</p>
        </div>
      </div>

      <!-- Middle Right Card -->
      <div class="md:col-span-4 relative rounded-2xl overflow-hidden group h-64">
        <img src="/images/greece.jpg" alt="Greece" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6">
          <h3 class="text-xl font-bold text-white">Greece</h3>
          <p class="text-white/80 text-sm mt-1">Ancient history meets blue waters</p>
        </div>
      </div>

      <!-- Bottom Row Cards -->
      <div class="md:col-span-4 relative rounded-2xl overflow-hidden group h-64">
        <img src="/images/bali.jpg" alt="Bali" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6">
          <h3 class="text-xl font-bold text-white">Bali</h3>
          <p class="text-white/80 text-sm mt-1">Island of the gods</p>
        </div>
      </div>

      <div class="md:col-span-4 relative rounded-2xl overflow-hidden group h-64">
        <img src="/images/london.jpg" alt="London" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6">
          <h3 class="text-xl font-bold text-white">London</h3>
          <p class="text-white/80 text-sm mt-1">Historic capital</p>
        </div>
      </div>

      <div class="md:col-span-4 relative rounded-2xl overflow-hidden group h-64">
        <img src="/images/spain.jpg" alt="Spain" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6">
          <h3 class="text-xl font-bold text-white">Spain</h3>
          <p class="text-white/80 text-sm mt-1">Vibrant culture</p>
        </div>
      </div>
    </div>

    <!-- View More Button -->
    <div class="text-center mt-12">
      <button class="bg-white text-purple-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition border-2 border-purple-600">
        View All Destinations
      </button>
    </div>
  </div>
</div>

<!-- Popular Destinations Section -->
<div class="min-h-screen bg-[#E4D6FF] py-20 px-4">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Popular Destinations</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover the world's most breathtaking places to visit</p>
    </div>

    <!-- Destination Cards -->
    <div class="flex justify-center items-stretch gap-8 flex-wrap">
      <!-- Card: Greece -->
      <div class="bg-white rounded-2xl w-80 overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 flex flex-col">
        <div class="h-60 overflow-hidden">
          <img src="/images/balos.jpg" alt="Greece" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="p-6 flex-grow">
          <div class="flex justify-between items-start">
            <h2 class="text-xl font-bold text-gray-800">Balos Beach, Greece</h2>
            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-medium">Popular</span>
          </div>
          <p class="text-gray-500 mt-2">Crystal clear waters and pink sand beaches</p>
          
          <div class="mt-4 flex items-center">
            <div class="flex items-center text-purple-600 mr-4">
              <svg class="w-5 h-5 mr-1 fill-current" viewBox="0 0 20 20">
                <path d="M10 15l-5.878 3.09L5.64 12.545.763 8.41l6.2-.9L10 2l3.037 5.51 6.2.9-4.877 4.135 1.518 5.545z"/>
              </svg>
              <span class="font-medium">4.8</span>
            </div>
            <div class="flex items-center text-gray-500">
              <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414M15 11a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
              <span>Beach</span>
            </div>
          </div>
          
          <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
            <div>
              <p class="text-sm text-gray-500">Starting from</p>
              <p class="text-xl font-bold text-purple-600">Rp 8.000.000</p>
            </div>
            <button class="bg-purple-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-purple-700 transition">
              Book Now
            </button>
          </div>
        </div>
      </div>

      <!-- Featured Card: Indonesia -->
      <div class="bg-white rounded-2xl w-88 overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-300 flex flex-col transform scale-105 z-10">
        <div class="h-64 overflow-hidden relative">
          <img src="/images/karsort.jpg" alt="Karimunjawa" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
          <div class="absolute top-4 right-4 bg-yellow-400 text-white px-3 py-1 rounded-full text-sm font-bold">BEST SELLER</div>
        </div>
        <div class="p-6 flex-grow">
          <h2 class="text-2xl font-bold text-gray-800">Karimunjawa, Indonesia</h2>
          <p class="text-gray-500 mt-3">Tropical paradise with pristine green water and overgrow mangrove</p>
          
          <div class="mt-5 flex items-center">
            <div class="flex items-center text-purple-600 mr-6">
              <svg class="w-5 h-5 mr-1 fill-current" viewBox="0 0 20 20">
                <path d="M10 15l-5.878 3.09L5.64 12.545.763 8.41l6.2-.9L10 2l3.037 5.51 6.2.9-4.877 4.135 1.518 5.545z"/>
              </svg>
              <span class="font-medium">4.9</span>
              <span class="text-gray-400 ml-1">(2.4K reviews)</span>
            </div>
            <div class="flex items-center text-gray-500">
              <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              <span>Adventure</span>
            </div>
          </div>
          
          <div class="mt-8 pt-5 border-t border-gray-100 flex justify-between items-center">
            <div>
              <p class="text-sm text-gray-500">Special offer</p>
              <p class="text-2xl font-bold text-purple-600">Rp 4.500.000</p>
              <p class="text-sm text-gray-400 line-through">Rp 6.000.000</p>
            </div>
            <button class="bg-purple-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-purple-700 transition flex items-center">
              Explore Package <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Card: Maldives -->
      <div class="bg-white rounded-2xl w-80 overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 flex flex-col">
        <div class="h-60 overflow-hidden">
          <img src="/images/malsort.jpg" alt="Maldives" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="p-6 flex-grow">
          <h2 class="text-xl font-bold text-gray-800">Silver Beach, Maldives</h2>
          <p class="text-gray-500 mt-2">Luxury overwater bungalows with private pools</p>
          
          <div class="mt-4 flex items-center">
            <div class="flex items-center text-purple-600 mr-4">
              <svg class="w-5 h-5 mr-1 fill-current" viewBox="0 0 20 20">
                <path d="M10 15l-5.878 3.09L5.64 12.545.763 8.41l6.2-.9L10 2l3.037 5.51 6.2.9-4.877 4.135 1.518 5.545z"/>
              </svg>
              <span class="font-medium">4.7</span>
            </div>
            <div class="flex items-center text-gray-500">
              <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
              <span>Luxury</span>
            </div>
          </div>
          
          <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
            <div>
              <p class="text-sm text-gray-500">All inclusive</p>
              <p class="text-xl font-bold text-purple-600">Rp 25.000.000</p>
            </div>
            <button class="bg-purple-600 text-white px-5 py-2 rounded-lg font-medium hover:bg-purple-700 transition">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- View All Button -->
    <div class="text-center mt-20">
      <button class="bg-white text-purple-600 px-8 py-4 rounded-full font-bold hover:bg-gray-50 transition border-2 border-purple-600 text-lg">
        View All Destinations →
      </button>
    </div>
  </div>

<section class="max-w-6xl mx-auto px-4 py-20">
  <div class="text-center mb-16">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Find answers to common questions about our cabins and services</p>
  </div>

  <div class="grid md:grid-cols-2 gap-12">
    <!-- Left Column: Questions List -->
    <div class="space-y-8">
      <!-- FAQ Item 1 -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
        <div class="flex items-start">
          <div class="bg-purple-100 text-purple-600 rounded-lg p-3 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-3">About Unwind Cabins</h3>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>How long have you been in business?</span>
              </li>
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>Why did you start this journey?</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
        <div class="flex items-start">
          <div class="bg-purple-100 text-purple-600 rounded-lg p-3 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Tell me more about the cabin</h3>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>What do I need to bring?</span>
              </li>
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>How do I get to the cabin?</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow border border-gray-100">
        <div class="flex items-start">
          <div class="bg-purple-100 text-purple-600 rounded-lg p-3 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Pets, family & friends</h3>
            <ul class="space-y-3 text-gray-600">
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>Please tell me I can bring my dog</span>
              </li>
              <li class="flex items-start">
                <span class="text-purple-500 mr-2">•</span>
                <span>How many people do your cabins sleep?</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Action Buttons -->
    <div class="space-y-6">
      <!-- Action Card 1 -->
      <div class="bg-gradient-to-r from-purple-600 to-purple-500 p-6 rounded-xl shadow-lg text-white">
        <div class="flex items-center mb-4">
          <div class="bg-white bg-opacity-20 rounded-full p-2 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold">Book Your Stay</h3>
        </div>
        <p class="mb-6 text-purple-100">Ready to experience nature's beauty? Check our availability and book your perfect cabin getaway.</p>
        <button class="w-full flex justify-between items-center bg-white text-purple-600 font-medium px-6 py-4 rounded-lg hover:bg-gray-100 transition">
          <span>Check Availability</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </button>
      </div>

      <!-- Action Card 2 -->
      <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
        <div class="flex items-center mb-4">
          <div class="bg-purple-100 text-purple-600 rounded-full p-2 mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-800">Need More Help?</h3>
        </div>
        <p class="mb-6 text-gray-600">Our team is happy to answer any additional questions you might have about your stay.</p>
        <button class="w-full flex justify-between items-center bg-purple-600 text-white font-medium px-6 py-4 rounded-lg hover:bg-purple-700 transition">
          <span>Contact Support</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
  
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const videoThumbnail = document.getElementById('videoThumbnail');
  const videoContainer = document.getElementById('videoContainer');
  const videoPlayer = document.getElementById('videoPlayer');
  const closeVideo = document.getElementById('closeVideo');

  // Replace with your video URL
  const videoUrl = "/images/video.mp4";

  videoThumbnail.addEventListener('click', function() {
    videoThumbnail.classList.add('hidden');
    videoContainer.classList.remove('hidden');
    videoPlayer.src = videoUrl;
  });

  closeVideo.addEventListener('click', function(e) {
    e.stopPropagation();
    videoContainer.classList.add('hidden');
    videoThumbnail.classList.remove('hidden');
    videoPlayer.src = "";
  });
});
</script>
</div>

<section class="relative bg-cover bg-center text-white overflow-hidden" style="background-image: url('/images/footer.jpg');">
  <!-- Animated overlay gradient -->
  <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-purple-900/30 to-black/70"></div>
  
  <div class="relative z-10 max-w-5xl mx-auto py-24 px-4 sm:px-6 lg:px-8 text-center">
    <!-- Text content with animation -->
    <div class="space-y-4 animate-fade-in">
      <p class="text-xl md:text-2xl font-light text-purple-200">We will see you</p>
      <h2 class="text-4xl md:text-5xl font-bold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white to-purple-200">
        Enjoy 30% Off On First Trip
      </h2>
      <p class="text-lg text-purple-100 max-w-2xl mx-auto mt-4">
        Start your adventure with exclusive discounts and premium experiences
      </p>
    </div>

    <!-- Enhanced Filter Form -->
    <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4 max-w-2xl mx-auto">
      <div class="flex-1 min-w-0 space-y-4 sm:space-y-0 sm:flex sm:gap-4">
        <select class="flex-1 px-5 py-3 bg-white/90 text-gray-800 font-medium rounded-lg border border-white/30 focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all shadow-sm hover:shadow-md">
          <option disabled selected>Destinations</option>
          <option>Paris</option>
          <option>Bali</option>
          <option>Tokyo</option>
          <option>New York</option>
        </select>
        
        <select class="flex-1 px-5 py-3 bg-white/90 text-gray-800 font-medium rounded-lg border border-white/30 focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all shadow-sm hover:shadow-md">
          <option disabled selected>Packages</option>
          <option>Standard</option>
          <option>Premium</option>
          <option>Luxury</option>
        </select>
      </div>
      
      <div class="flex-1 min-w-0 space-y-4 sm:space-y-0 sm:flex sm:gap-4">
        <input 
          type="date" 
          class="flex-1 px-5 py-3 bg-white/90 text-gray-800 font-medium rounded-lg border border-white/30 focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all shadow-sm hover:shadow-md"
        />
        
        <button class="flex-1 px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-800 text-white font-bold rounded-lg hover:from-purple-700 hover:to-purple-900 transition-all transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
          Book Now
        </button>
      </div>
    </div>

    <!-- Footer Links with hover effects -->
    <div class="mt-16 flex flex-wrap justify-center gap-6 text-sm md:text-base">
      <a href="#" class="hover:text-purple-300 transition-colors duration-200 transform hover:scale-105">About Us</a>
      <a href="#" class="hover:text-purple-300 transition-colors duration-200 transform hover:scale-105">FAQs</a>
      <a href="#" class="hover:text-purple-300 transition-colors duration-200 transform hover:scale-105">Contact</a>
      <a href="#" class="hover:text-purple-300 transition-colors duration-200 transform hover:scale-105">Blog</a>
      <a href="#" class="hover:text-purple-300 transition-colors duration-200 transform hover:scale-105">Privacy Policy</a>
    </div>

    <!-- Copyright with subtle glow -->
    <div class="mt-8 font-medium text-sm text-purple-100">
      &copy; 2025 <span class="text-white font-bold tracking-wider">LANZADERA</span>. All rights reserved.
    </div>

    <!-- Social Icons with hover animations -->
    <div class="flex justify-center gap-6 mt-6">
      <a href="#" class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/twitter.svg" alt="Twitter" class="w-5 h-5 invert" />
      </a>
      <a href="#" class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" class="w-5 h-5 invert" />
      </a>
      <a href="#" class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" class="w-5 h-5 invert" />
      </a>
      <a href="#" class="p-2 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/pinterest.svg" alt="Pinterest" class="w-5 h-5 invert" />
      </a>
    </div>
  </div>

  <!-- Floating decorative elements -->
  <div class="absolute top-10 left-10 w-8 h-8 rounded-full bg-purple-500/20 animate-float"></div>
  <div class="absolute bottom-20 right-16 w-6 h-6 rounded-full bg-white/30 animate-float-delay"></div>
</section>

<style>
  .animate-fade-in {
    animation: fadeIn 1s ease-out forwards;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-float {
    animation: float 6s ease-in-out infinite;
  }
  .animate-float-delay {
    animation: float 6s ease-in-out 1s infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
  }
</style>
</style>

  </body>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const videoThumbnail = document.getElementById('videoThumbnail');
    const videoContainer = document.getElementById('videoContainer');
    const videoPlayer = document.getElementById('videoPlayer');
    const closeVideo = document.getElementById('closeVideo');

    // Replace with your video URL (YouTube, Vimeo, etc.)
    const videoUrl = "/images/video.mp4";

    videoThumbnail.addEventListener('click', function() {
      videoThumbnail.classList.add('hidden');
      videoContainer.classList.remove('hidden');
      videoPlayer.src = videoUrl;
    });

    closeVideo.addEventListener('click', function(e) {
      e.stopPropagation();
      videoContainer.classList.add('hidden');
      videoThumbnail.classList.remove('hidden');
      videoPlayer.src = "";
    });
  });
</script>

</html>