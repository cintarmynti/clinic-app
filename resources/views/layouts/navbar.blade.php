<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center">
        <span class="ml-2 text-xl font-bold text-pink-500">Salam</span>
        <span class="ml-1 text-xl font-semibold text-green-500">Homecare</span>
      </div>

      <!-- Menu -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="/" class="text-gray-700 hover:text-pink-500 font-medium">Home</a>

        <!-- Dropdown Layanan Kami -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-pink-500 font-medium flex items-center">
            Layanan Kami
            <svg class="ml-1 w-4 h-4 fill-current" viewBox="0 0 20 20">
              <path d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" />
            </svg>
          </button>
          <div class="absolute hidden group-hover:block bg-white shadow-md mt-2 rounded-md">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50">Layanan 1</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50">Layanan 2</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-pink-50">Layanan 3</a>
          </div>
        </div>

        <a href="/dokter" class="text-gray-700 hover:text-pink-500 font-medium">Dokter</a>
        <a href="/klinik" class="text-gray-700 hover:text-pink-500 font-medium">Klinik</a>
        <a href="/testimonial" class="text-gray-700 hover:text-pink-500 font-medium">Testimonial</a>
        <a href="/artikel" class="text-gray-700 hover:text-pink-500 font-medium">Artikel</a>
      </div>

      <!-- Button Konsultasi -->
      <div class="hidden md:flex">
        <a href="#"
           class="bg-teal-400 hover:bg-teal-500 text-white px-4 py-2 rounded-md font-medium">
          Konsultasi Sekarang
        </a>
      </div>
    </div>
  </div>
</nav>
