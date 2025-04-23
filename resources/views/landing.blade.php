<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Rekrutmen</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/scroll.js', 'resources/js/landing.js'])
</head>

<body class="bg-white font-[Poppins]">
    <!-- Section Navbar + Hero -->
    <section id="beranda" class="relative bg-cover bg-center min-h-[60vh] text-white"
        style="background-image: url('/images/office.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <!-- Navbar -->
        @include('components.navbar')

        <!-- Hero Section -->
        <div class="relative z-10 flex flex-col items-center justify-center text-center h-[60vh] px-6 md:px-20">

            <h1 class="text-3xl md:text-5xl font-bold mb-4" data-aos="fade-up">
                SISTEM REKRUTMEN PT XYZ BERMARTABAT
            </h1>
            <p class="text-md md:text-xl mb-6 max-w-xl" data-aos="fade-up" data-aos-delay="200">
                PT XYZ membuka kesempatan bagi Anda untuk bertumbuh dan meraih puncak karier yang Anda impikan.
            </p>
            <a href="#" data-scroll="lowongan"
                class="inline-flex items-center gap-2 px-8 py-3 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-full text-lg transition-all duration-300"
                data-aos="fade-up" data-aos-delay="400">
                Lamar Sekarang
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Tentang Perusahaan -->
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Konten Kiri -->
            <div data-aos="fade-right">
                <h4 class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3">Profil Kami</h4>
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 leading-tight">
                    Tentang <span class="text-black">Perusahaan</span>
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-4 text-justify">
                    PT <span class="text-blue-600 font-semibold">XYZ</span> adalah perusahaan teknologi yang berfokus
                    pada <span class="text-blue-600 font-semibold">inovasi</span> digital. Kami berkomitmen menciptakan
                    solusi masa depan
                    dengan mengembangkan potensi talenta terbaik Indonesia.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed text-justify">
                    Bersama kami, Anda tidak hanya membangun karier, tetapi juga berkontribusi membentuk masa depan yang
                    lebih
                    <span class="text-blue-600 font-semibold">berkelanjutan</span> dalam ekosistem inovasi global.
                </p>
                <a href="#" data-scroll="lowongan"
                    class="inline-block mt-8 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
                    Jadilah Bagian dari Kami
                </a>
            </div>

            <!-- Gambar Kanan -->
            <div data-aos="fade-left" class="flex justify-center">
                <img src="/images/company.jpg" alt="Tentang Perusahaan" class="rounded-2xl shadow-lg w-3/4 md:w-full">
            </div>
        </div>
    </section>

    <section id="keunggulan" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-800" data-aos="fade-up">
                Kenapa Bergabung dengan Kami?
            </h2>
            <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">

                <!-- Card Benefit 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="text-5xl mb-4">✨</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Lingkungan Kerja Nyaman</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami menciptakan suasana kerja yang positif,
                        kolaboratif, dan
                        mendukung pengembangan pribadi.</p>
                </div>

                <!-- Card Benefit 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="text-5xl mb-4">🎓</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Kesempatan Pengembangan Karier</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Kami menyediakan pelatihan, sertifikasi, dan jalur
                        karier
                        yang jelas untuk menunjang pertumbuhan Anda.</p>
                </div>

                <!-- Card Benefit 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="text-5xl mb-4">📈</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Stabilitas dan Tunjangan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">PT XYZ menawarkan kompensasi kompetitif, tunjangan
                        kesehatan,
                        dan program kesejahteraan karyawan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="lowongan" class="py-24 bg-white scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 text-center">

            <!-- Subheading -->
            <h4 class="text-blue-600 font-semibold text-sm uppercase tracking-widest mb-3" data-aos="fade-up">
                Posisi yang Tersedia
            </h4>

            <!-- Heading utama -->
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-gray-800 leading-tight" data-aos="fade-up"
                data-aos-delay="100">
                Lowongan Pekerjaan
            </h2>

            <!-- Grid Card Lowongan -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Card Lowongan 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="text-5xl mb-4 text-blue-600">📂</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Akuntan</h3>
                        <p class="text-sm text-gray-600 mb-4">PT XYZ Berkah Indonesia Jaya</p>
                        <span
                            class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Fulltime</span>
                    </div>
                    <a href="#"
                        class="mt-4 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded-xl transition">
                        Detail Lowongan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="text-5xl mb-4 text-blue-600">💻</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Admin</h3>
                        <p class="text-sm text-gray-600 mb-4">PT XYZ Berkah Indonesia Jaya</p>
                        <span
                            class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Fulltime</span>
                    </div>
                    <a href="#"
                        class="mt-4 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded-xl transition">
                        Detail Lowongan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="text-5xl mb-4 text-blue-600">🔧</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Operator</h3>
                        <p class="text-sm text-gray-600 mb-4">PT XYZ Berkah Indonesia Jaya</p>
                        <span
                            class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Fulltime</span>
                    </div>
                    <a href="#"
                        class="mt-4 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded-xl transition">
                        Detail Lowongan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="text-5xl mb-4 text-blue-600">🚘</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Driver</h3>
                        <p class="text-sm text-gray-600 mb-4">PT XYZ Berkah Indonesia Jaya</p>
                        <span
                            class="inline-block bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">Fulltime</span>
                    </div>
                    <a href="#"
                        class="mt-4 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded-xl transition">
                        Detail Lowongan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </section>

    {{-- alur rekrutmen --}}
    <section id="alur" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-24 text-center">

            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-gray-800" data-aos="fade-up">
                Alur Rekrutmen
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                {{-- step1 --}}
                <div class="bg-gray-100 p-6 rounded-2xl shadow-md flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-4">1</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Daftar Online</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Kandidat mengisi formulir pendaftaran dan
                            mengunggah
                            dokumen yang dibutuhkan secara online.</p>
                    </div>
                </div>
                {{-- step2 --}}
                <div class="bg-gray-100 p-6 rounded-2xl shadow-md flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-4">2</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Seleksi Administrasi</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Tim HR melakukan verifikasi berkas dan seleksi
                            administrasi
                            awal.</p>
                    </div>
                </div>
                {{-- step3 --}}
                <div class="bg-gray-100 p-6 rounded-2xl shadow-md flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-4">3</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Tes Online</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Kandidat mengikuti tes kemampuan dasar dan
                            psikotes secara
                            online.</p>
                    </div>
                </div>
                {{-- step4 --}}
                <div class="bg-gray-100 p-6 rounded-2xl shadow-md flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="400">
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-4">4</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Wawancara</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Wawancara langsung dengan HRD dan user terkait
                            posisi yang
                            dilamar.</p>
                    </div>
                </div>
                {{-- step5 --}}
                <div class="bg-gray-100 p-6 rounded-2xl shadow-md flex flex-col justify-between h-full"
                    data-aos="fade-up" data-aos-delay="500">
                    <div>
                        <div class="text-4xl font-bold text-blue-600 mb-4">5</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Offering</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Jika lolos, kandidat akan menerima penawaran
                            kerja resmi
                            dari perusahaan.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- footer --}}
    @include('components.footer')

</body>

</html>
