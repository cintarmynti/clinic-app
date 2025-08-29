<x-master-layout>
    <h1 class="text-3xl font-bold text-center text-black mt-10 mb-8">
        Artikel Salam Homecare
    </h1>

    <!-- Kontainer Utama -->
    <div class="flex flex-col lg:flex-row gap-6 mx-36">

        <!-- Kolom Kiri -->
        <div class="w-full lg:w-2/3 space-y-6">
            <!-- Card 1 -->
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow p-4 gap-4">
                <!-- Image -->
                <div class="w-full sm:w-40 flex-shrink-0">
                    <img src="https://picsum.photos/id/1/300/200" alt="Artikel 1"
                        class="w-full h-40 sm:h-full object-cover rounded-lg">
                </div>

                <!-- Content -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-gray-900">
                            Cara Mengatasi Masalah Pencernaan Secara Alami
                        </h2>
                        <p class="text-gray-600 mt-2 text-sm sm:text-base">
                            Mengatasi masalah pencernaan secara alami dapat dilakukan dengan mengonsumsi makanan sehat,
                            olahraga rutin, dan menggunakan obat alami. Simak cara-caranya di sini.
                        </p>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-500 mt-3">
                        28 August 2025 |
                        <span class="bg-pink-500 text-white px-2 py-0.5 rounded text-xs">Lifestyle</span> |
                        Views : 8
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow p-4 gap-4">
                <!-- Image -->
                <div class="w-full sm:w-40 flex-shrink-0">
                    <img src="https://picsum.photos/id/1/300/200" alt="Artikel 2"
                        class="w-full h-40 sm:h-full object-cover rounded-lg">
                </div>

                <!-- Content -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h2 class="text-lg sm:text-xl font-bold text-gray-900">
                            Mengapa Detoksifikasi Tubuh Tidak Selalu Diperlukan?
                        </h2>
                        <p class="text-gray-600 mt-2 text-sm sm:text-base">
                            Detoksifikasi tubuh tidak selalu diperlukan karena tubuh manusia memiliki sistem
                            detoksifikasi alami yang efektif. Simak penjelasan lebih lanjut tentang mitos detoks dan
                            fakta-fakta yang terkait.
                        </p>
                    </div>
                    <div class="text-xs sm:text-sm text-gray-500 mt-3">
                        26 August 2025 |
                        <span class="bg-pink-500 text-white px-2 py-0.5 rounded text-xs">Lifestyle</span> |
                        Views : 21
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-full lg:w-1/3">
            <!-- Search Box -->
            <div class="mb-6">
                <div class="flex">
                    <input type="text" placeholder="Cari Artikel"
                        class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-pink-400">
                    <button class="bg-pink-500 hover:bg-pink-600 text-white px-6 rounded-r-lg">
                        Search
                    </button>
                </div>
            </div>

            <!-- Artikel Terbaru -->
            <h2 class="text-lg font-bold mb-4">Artikel Terbaru</h2>

            <!-- Card 1 -->
            <div class="flex items-center bg-white rounded-2xl shadow-md p-3 mb-4">
                <img src="https://picsum.photos/id/1/100/100" alt="artikel 1"
                    class="w-20 h-20 object-cover rounded-lg">
                <div class="ml-3">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">
                        Cara Mengatasi Masalah Pencernaan Secara Alami
                    </h3>
                    <span
                        class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-md inline-block mt-2">Lifestyle</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-center bg-white rounded-2xl shadow-md p-3 mb-4">
                <img src="https://picsum.photos/id/1/100/100" alt="artikel 2"
                    class="w-20 h-20 object-cover rounded-lg">
                <div class="ml-3">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">
                        Mengapa Detoksifikasi Tubuh Tidak Selalu Diperlukan?
                    </h3>
                    <span
                        class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-md inline-block mt-2">Lifestyle</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-center bg-white rounded-2xl shadow-md p-3 mb-4">
                <img src="https://picsum.photos/id/1/100/100" alt="artikel 3"
                    class="w-20 h-20 object-cover rounded-lg">
                <div class="ml-3">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">
                        Tips Aman Berolahraga di Usia 40 Tahun ke Atas
                    </h3>
                    <span
                        class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-md inline-block mt-2">Lifestyle</span>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
