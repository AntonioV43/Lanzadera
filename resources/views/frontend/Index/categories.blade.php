<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Destination Categories - Lanzadera</title>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
  /* Style untuk dropdown duration */
  select#durationInput {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 1em;
  }
  
  /* Style untuk option */
  select#durationInput option {
    padding: 0.5rem;
  }
</style>
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
  <!-- Navbar Fixed -->
  <nav class="fixed top-0 left-0 right-0 z-50 flex flex-col items-center py-4 px-8 font-prompt" style="background-color: rgba(146, 95, 226, 0.07)">
    <div class="flex items-center justify-between w-full max-w-6xl">
      <div class="flex items-center absolute left-8">
        <a href="/categories">
          <img src="/images/lanzadera.svg" alt="Lanzadera Logo" class="h-24">
        </a>
      </div>
      <ul class="flex space-x-8 text-black font-medium mx-auto">
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
  <div id="searchForm" class="bg-white shadow-lg rounded-full px-6 py-4 flex flex-wrap justify-center items-center gap-4 w-[90%] max-w-5xl">
    <!-- Location Input -->
    <div class="relative">
      <!-- ... (icon tetap sama) ... -->
      <input 
        id="locationInput"
        type="text" 
        placeholder="Where do you want to go?" 
        class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-64 text-sm text-gray-700"
      />
    </div>
    
    <!-- Duration Input dengan Dropdown -->
    <div class="relative">
      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <select 
        id="durationInput"
        class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-40 text-sm text-gray-700 appearance-none bg-white"
      >
        <option value="">Any duration</option>
        <option value="1">1 day</option>
        <option value="2">2 days</option>
        <option value="3">3 days</option>
        <option value="5">5 days</option>
        <option value="7">1 week</option>
        <option value="14">2 weeks</option>
      </select>
    </div>
    
    <!-- Budget Input -->
    <div class="relative">
      <!-- ... (icon tetap sama) ... -->
      <input 
        id="budgetInput"
        type="number" 
        placeholder="Max budget (IDR)" 
        class="pl-10 pr-4 py-2 rounded-full border border-gray-300 w-40 text-sm text-gray-700 placeholder-gray-400"
      />
    </div>
    
    <!-- Search Button -->
    <button id="searchButton" type="button" class="bg-purple-500 text-white px-6 py-2 rounded-full font-semibold hover:bg-purple-600 text-sm flex items-center gap-2">
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
<main id="destinationsContainer" class="w-full max-w-5xl mx-auto space-y-6">
  @foreach($destinations as $destination)
    <div class="destination-card bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md" 
         data-name="{{ strtolower($destination->name) }}"
         data-location="{{ strtolower($destination->location) }}"
         data-duration="{{ $destination->duration }}"
         data-price="{{ $destination->price }}">
    <!-- Dynamic Card -->
    <div class="bg-white rounded-xl p-4 flex flex-col sm:flex-row shadow-md">
        <img src="{{ Storage::url($destination->image) }}" alt="{{ $destination->name }}" class="w-full h-60 object-cover rounded-lg">
        <div class="sm:ml-6 mt-4 sm:mt-0 flex flex-col justify-between w-full">
            <div>
                <h2 class="text-xl font-semibold">{{ $destination->name }}</h2>
                <p class="text-sm text-gray-700 mt-1">{{ $destination->caption }}</p>
            </div>
            <div class="flex items-center text-sm mt-4 text-gray-600 space-x-4">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    {{ $destination->people }} Orang
                </span>
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ $destination->duration }}
                </span>
            </div>
            <div class="flex justify-between items-center mt-4">
                <span class="font-semibold text-purple-600">Rp{{ number_format($destination->price, 0, ',', '.') }}/orang</span>
                <a href="{{ route('destination.show', $destination->name) }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600">
                    Book Ticket
                </a>
            </div>
        </div>
    </div>
    </div>
  @endforeach
</main>
</section>
</main>
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
  document.addEventListener('DOMContentLoaded', function() {
    const searchButton = document.getElementById('searchButton');
    const locationInput = document.getElementById('locationInput');
    const durationInput = document.getElementById('durationInput');
    const budgetInput = document.getElementById('budgetInput');
    const destinationsContainer = document.getElementById('destinationsContainer');
    const destinationCards = document.querySelectorAll('.destination-card');
    const noResultsDiv = document.getElementById('noResults');

    // Trigger pencarian saat input berubah
    [searchButton, locationInput, durationInput, budgetInput].forEach(element => {
      element.addEventListener('input', filterDestinations);
    });
    durationInput.addEventListener('change', filterDestinations);

    function filterDestinations() {
      const locationQuery = locationInput.value.toLowerCase();
      const durationQuery = durationInput.value;
      const budgetQuery = budgetInput.value;
      
      let hasVisibleResults = false;

      destinationCards.forEach(card => {
        const cardName = card.dataset.name;
        const cardLocation = card.dataset.location;
        const cardDuration = card.dataset.duration;
        const cardPrice = parseFloat(card.dataset.price);
        
        // Filter lokasi (nama atau lokasi destinasi)
        const locationMatch = !locationQuery || 
          cardName.includes(locationQuery) || 
          cardLocation.includes(locationQuery);
        
        // Filter durasi (exact match)
        const durationMatch = !durationQuery || 
          !cardDuration || // Jika tidak ada data durasi, abaikan filter
          cardDuration.includes(durationQuery);
        
        // Filter budget
        const budgetMatch = !budgetQuery || 
          !cardPrice || // Jika tidak ada data harga, abaikan filter
          cardPrice <= parseFloat(budgetQuery);
        
        if (locationMatch && durationMatch && budgetMatch) {
          card.style.display = 'flex';
          hasVisibleResults = true;
        } else {
          card.style.display = 'none';
        }
      });

      // Toggle pesan "no results"
      if (hasVisibleResults) {
        noResultsDiv.classList.add('hidden');
        destinationsContainer.classList.remove('hidden');
      } else {
        noResultsDiv.classList.remove('hidden');
        destinationsContainer.classList.add('hidden');
      }
    }

    // Fungsi untuk clear filter
    window.clearFilters = function() {
      locationInput.value = '';
      durationInput.selectedIndex = 0;
      budgetInput.value = '';
      filterDestinations();
    };
  });
</script>

</body>
</html>
