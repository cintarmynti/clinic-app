<x-master-layout>
    <!-- Section Hero -->
    <section class="bg-pink-500 text-white min-h-[75vh] flex items-center justify-center text-center px-6">
        <div class="max-w-3xl mx-auto">
            <!-- Judul -->
            <h1 class="text-3xl md:text-4xl font-extrabold mb-4 leading-snug">
                Salam Homecare <br>
                <span class="block">Layanan Perawatan Kesehatan di Rumah</span>
            </h1>

            <!-- Deskripsi -->
            <p class="text-base md:text-lg mb-8 leading-relaxed">
                Kami hadir sebagai solusi untuk setiap permasalahan kesehatan Anda dan keluarga tercinta.
                Tersedia layanan datang ke rumah (Home Visit) di mana pun dan kapan pun Anda butuhkan,
                dengan pelayanan tercepat, aman, dan profesional, siap melayani Anda setiap saat.
            </p>

            <!-- Tombol -->
            <a href="#"
                class="bg-white text-pink-600 font-semibold px-6 py-3 rounded-lg shadow-md
                      hover:bg-pink-100 transition inline-block">
                Konsultasi Sekarang
            </a>
        </div>
    </section>

    <!-- Section Mereka yang telah percaya kami -->
    <section class="py-16 px-6 md:px-36 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Kiri: Video / Gambar -->
            <div class="relative">
                <img src="{{ asset('images/medis.jpg') }}" alt="Testimoni Salam Homecare"
                    class="rounded-xl shadow-lg w-full object-cover">
                <!-- Tombol Play -->
                <button class="absolute inset-0 flex items-center justify-center">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-md">
                        <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.5 5.5l7 4.5-7 4.5v-9z" />
                        </svg>
                    </div>
                </button>
            </div>

            <!-- Kanan: Konten Teks -->
            <div>
                <div class="h-1 w-12 bg-teal-400 mb-4"></div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Mereka yang telah percaya kami
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Salam Homecare, di bawah naungan PT Salam Sejahtera Nusantara dan didirikan sejak tahun 2022,
                    berkomitmen untuk meningkatkan kualitas hidup masyarakat dengan menyediakan layanan kesehatan di
                    rumah.
                    Kami menawarkan berbagai layanan kesehatan di rumah atau lokasi pilihan pasien, didukung oleh tenaga
                    kesehatan
                    yang ahli dan profesional.
                </p>
                <p class="text-gray-600 leading-relaxed mt-4">
                    Beroperasi di wilayah Bandung, Jakarta, Yogyakarta, Surabaya, dan sekitarnya, Salam Homecare juga
                    merupakan
                    platform digital yang bekerja sama dengan dokter yang memiliki izin praktek di tiap kota sebagai
                    penanggung
                    jawabnya. Dengan terus berinovasi menggunakan teknologi terkini, kami memastikan setiap pasien
                    mendapatkan
                    perawatan yang tepat, berkualitas, dan sesuai standar kesehatan yang berlaku.
                </p>
            </div>
        </div>
    </section>

    <section class=" py-16 px-6">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <!-- Icon -->
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <!-- ganti icon sesuai kebutuhan -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                </div>
                <!-- Title -->
                <h3 class="text-3xl font-semibold mb-2">200500</h3>
                <!-- Descriptioxl-->
                <p class="text-xl text-gray-600 mb-6">
                    Pengunjung
                </p>
                <!-- Button -->

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-3xl font-semibold mb-2">15000+</h3>
                <p class="text-xl text-gray-600 mb-6">
                    Pasien dilayani
                </p>

            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3 0 1.313.84 2.426 2.001 2.829V17h2v-3.171A3.001 3.001 0 0015 11c0-1.657-1.343-3-3-3z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-3xl font-semibold mb-2">10000+</h3>
                <p class="text-xl text-gray-600 mb-6">
                    Pemesanan
                </p>

            </div>

        </div>
    </section>

    <section class="bg-white py-12 px-36">
        <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10">

            <!-- Bagian Kiri: Teks -->
            <div class="w-full lg:w-1/2">
                <!-- Judul -->
                <div>
                    <div class="h-1 w-12 bg-teal-400 mb-4"></div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 relative">
                        Apa anda pernah <br> mengalami hal ini?
                    </h2>
                </div>

                <!-- List Pertanyaan -->
                <div class="space-y-4">
                    <div class="bg-cyan-100 text-gray-800 px-5 py-3 rounded-lg shadow-sm">
                        Ingin berobat tapi tidak punya waktu ke Rumah Sakit / Klinik?
                    </div>
                    <div class="bg-cyan-100 text-gray-800 px-5 py-3 rounded-lg shadow-sm">
                        Pernah dirawat di Rumah Sakit / Klinik tapi tidak nyaman?
                    </div>
                    <div class="bg-cyan-100 text-gray-800 px-5 py-3 rounded-lg shadow-sm">
                        Sedang sakit dan ingin segera konsultasi?
                    </div>
                    <div class="bg-cyan-100 text-gray-800 px-5 py-3 rounded-lg shadow-sm">
                        Sakit tapi sulit ke Rumah Sakit / Klinik?
                    </div>
                    <div class="bg-cyan-100 text-gray-800 px-5 py-3 rounded-lg shadow-sm">
                        Sudah beli obat tapi lama sembuh?
                    </div>
                </div>
            </div>

            <!-- Bagian Kanan: Gambar -->
            <div class="w-full lg:w-1/2 flex justify-center items-center">
                <img src="{{ asset('images/coronavirus-sample-procedure.jpg') }}" alt="Dokter"
                    class="relative z-10 w-full h-auto object-cover rounded-xl shadow-lg">
            </div>

        </div>
    </section>


    <section class="bg-white py-12 px-36">
        <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10">

            <!-- Bagian Kiri: Gambar -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-start">
                <div class="relative w-full">
                    <img src="{{ asset('images/elderly-female-smiling-with-doctor-visiting-senior-patient-woman-hospital-ward.jpg') }}"
                        alt="Dokter" class="rounded-xl w-full h-auto object-cover">
                    <!-- Background shape pink -->
                    <div class="absolute -top-10 -left-10 w-72 h-72 bg-pink-200 rounded-full -z-10"></div>
                </div>
            </div>

            <!-- Bagian Kanan: Teks & List -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Kami punya solusinya!</h2>
                <ul class="space-y-4">
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Dapatkan layanan nyaman dan terpercaya</li>
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Kami menyediakan jasa layanan ke tempat Anda</li>
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Tenaga kesehatan yang ahli dan profesional</li>
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Fasilitas lengkap sesuai dengan kebutuhan Anda</li>
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Konsultasi gratis sepuasnya pasca layanan</li>
                    <li class="bg-pink-100 rounded-lg px-4 py-2">Cepat dan sigap langsung ke tempat Anda</li>
                </ul>

                <button class="mt-8 bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-lg">
                    Konsultasi Sekarang
                </button>
            </div>

        </div>
    </section>

    <section class="py-12 px-36">
        <div class="container mx-auto px-6 text-center">
            <!-- Judul Section -->
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Layanan Terbaik Kami</h2>
                <div class="w-16 h-1 bg-teal-400 mx-auto mt-2"></div>
            </div>

            <!-- Grid Layanan -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Card Layanan -->
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/1.svg')}}" alt="Infus Vitamin" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">INFUS VITAMIN</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/2.svg')}}" alt="Dokter ke Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">DOKTER KE RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/3.svg')}}" alt="Khitanan di Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">KHITANAN DI RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/4.svg')}}" alt="Perawatan Luka" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">PERAWATAN LUKA</h3>
                </div>

                 <!-- Card Layanan -->
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/5.svg')}}" alt="Infus Vitamin" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">INFUS VITAMIN</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/6.svg')}}" alt="Dokter ke Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">DOKTER KE RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/7.svg')}}" alt="Khitanan di Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">KHITANAN DI RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/1.svg')}}" alt="Perawatan Luka" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">PERAWATAN LUKA</h3>
                </div>

                 <!-- Card Layanan -->
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/2.svg')}}" alt="Infus Vitamin" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">INFUS VITAMIN</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/3.svg')}}" alt="Dokter ke Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">DOKTER KE RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/4.svg')}}" alt="Khitanan di Rumah" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">KHITANAN DI RUMAH</h3>
                </div>

                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col items-center">
                    <img src="{{asset('images/5.svg')}}" alt="Perawatan Luka" class="w-28 h-28 mb-4">
                    <h3 class=" text-lg text-gray-900">PERAWATAN LUKA</h3>
                </div>

                <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col justify-between">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-6">
                        <img src="{{ asset('images/pngwing.com.png') }}" alt="Company Logo" class="h-8 object-contain">
                        <img src="{{ asset('images/download.jpeg') }}" alt="User"
                            class="w-12 h-12 rounded-full object-cover">
                    </div>
                    <!-- Quote -->
                    <p class="text-xl text-gray-900 mb-6">“They tailor their solutions to our specific needs and goals.”
                    </p>
                    <!-- Footer -->
                    <div>
                        <p class="font-semibold text-gray-900">Denis Slavska</p>
                        <p class="text-sm text-gray-500">CTO, Ailitic<br>New York City, New York</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-center mb-6">
                        <img src="{{ asset('images/pngwing.com.png') }}" alt="Company Logo" class="h-8 object-contain">
                        <img src="{{ asset('images/download.jpeg') }}" alt="User"
                            class="w-12 h-12 rounded-full object-cover">
                    </div>
                    <p class="text-xl text-gray-900 mb-6">“They organized their work and internal management was
                        outstanding.”</p>
                    <div>
                        <p class="font-semibold text-gray-900">Jahan Melad</p>
                        <p class="text-sm text-gray-500">Project Manager, Buildwave<br>New York City, New York</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-center mb-6">
                        <img src="{{ asset('images/pngwing.com.png') }}" alt="Company Logo" class="h-8 object-contain">
                        <img src="{{ asset('images/download.jpeg') }}" alt="User"
                            class="w-12 h-12 rounded-full object-cover">
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
