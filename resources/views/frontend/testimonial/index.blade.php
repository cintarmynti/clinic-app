<x-master-layout>
    <!-- Review Section -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <p class="uppercase text-sm tracking-widest text-gray-500">Our Reviews</p>
                <h2 class="text-3xl md:text-4xl font-bold mt-2">
                    What Our <span class="text-gray-400">Clients</span> Say
                </h2>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex gap-3">
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white hover:bg-gray-800 transition">
                    ←
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-black text-white hover:bg-gray-800 transition">
                    →
                </button>
            </div>
        </div>

    </section>

     <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
          <!-- Header -->
          <div class="flex justify-between items-center mb-6">
            <img src="{{asset('images/pngwing.com.png')}}" alt="Company Logo" class="h-8 object-contain">
            <img src="{{asset('images/download.jpeg')}}" alt="User" class="w-12 h-12 rounded-full object-cover">
          </div>
          <!-- Quote -->
          <p class="text-xl text-gray-900 mb-6">“They tailor their solutions to our specific needs and goals.”</p>
          <!-- Footer -->
          <div>
            <p class="font-semibold text-gray-900">Denis Slavska</p>
            <p class="text-sm text-gray-500">CTO, Ailitic<br>New York City, New York</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
          <div class="flex justify-between items-center mb-6">
            <img src="{{asset('images/pngwing.com.png')}}" alt="Company Logo" class="h-8 object-contain">
            <img src="{{asset('images/download.jpeg')}}" alt="User" class="w-12 h-12 rounded-full object-cover">
          </div>
          <p class="text-xl text-gray-900 mb-6">“They organized their work and internal management was outstanding.”</p>
          <div>
            <p class="font-semibold text-gray-900">Jahan Melad</p>
            <p class="text-sm text-gray-500">Project Manager, Buildwave<br>New York City, New York</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow p-6 flex flex-col justify-between">
          <div class="flex justify-between items-center mb-6">
            <img src="{{asset('images/pngwing.com.png')}}" alt="Company Logo" class="h-8 object-contain">
            <img src="{{asset('images/download.jpeg')}}" alt="User" class="w-12 h-12 rounded-full object-cover">
          </div>
          <p class="text-xl text-gray-900 mb-6">“Working with them was a great experience.”</p>
          <div>
            <p class="font-semibold text-gray-900">Jim Halpert</p>
            <p class="text-sm text-gray-500">Lead Engineering, Inhive Space<br>New York City, New York</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</x-master-layout>
