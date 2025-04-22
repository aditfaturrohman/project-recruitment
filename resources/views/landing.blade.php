<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Rekrutmen</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-[Poppins]">

  <!-- Wrapper Section untuk Navbar + Hero -->
  <section class="relative bg-cover bg-center min-h-[60vh] text-white"
    style="background-image: url('/images/office.jpg');">

    <!-- Overlay gelap -->
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-20 pt-10 pb-8 relative z-10" data-aos="fade-down">
      <div class="flex items-center space-x-2">
        <!-- <img src="" alt="Logo" class="h-10 w-10"> -->
        <span class="text-white font-bold text-lg">PERTAMINA</span>
      </div>
      <ul class="hidden md:flex space-x-8">
        <li><a href="#" class="text-white hover:font-semibold transition">Beranda</a></li>
        <li><a href="#" class="text-white hover:font-semibold transition">Lowongan</a></li>
        <li><a href="#" class="text-white hover:font-semibold transition">Kontak</a></li>
      </ul>
      <div class="flex space-x-4">
        <a href="#" class="font-semibold text-white hover:font-bold transition">Login</a>
        <a href="#" class="font-semibold text-white hover:font-bold transition">Register</a>
      </div>
    </nav>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <div class="relative z-10 flex flex-col items-center justify-center text-center h-[60vh] px-6 md:px-20">

      <h1 class="text-3xl md:text-5xl font-bold mb-4" data-aos="fade-up">
        SISTEM REKRUTMEN PT XYZ BERMARTABAT
      </h1>
      <p class="text-md md:text-xl mb-6 max-w-xl" data-aos="fade-up" data-aos-delay="200">
        PT XYZ membuka kesempatan bagi Anda untuk bertumbuh dan meraih puncak karier yang Anda impikan.
      </p>
      <a href="#"
        class="inline-flex items-center gap-2 px-8 py-3 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-full text-lg transition-all duration-300"
        data-aos="fade-up" data-aos-delay="400">
        Lamar Sekarang
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>

  </section>

  <!-- Tentang Perusahaan -->
  <section id="tentang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div data-aos="fade-right">
        <h2 class="text-3xl font-bold mb-6">Tentang Perusahaan</h2>
        <p class="text-gray-600 leading-relaxed  md:text-justify [text-align:justify]">
          PT XYZ adalah perusahaan yang bergerak di bidang teknologi digital dan inovasi. Kami berkomitmen menciptakan
          solusi terbaik serta memberikan ruang bagi talenta untuk berkembang.
        </p>
        <p class="text-gray-600 leading-relaxed  md:text-justify [text-align:justify]">
          Bersama kami, Anda tidak hanya membangun karier, tetapi juga berkontribusi untuk masa depan yang lebih baik
          dengan bergabung dalam ekosistem inovasi yang berkelanjutan.
        </p>
      </div>
      <div data-aos="fade-left" class="flex justify-center">
        <img src="/images/company.jpg" alt="Tentang Perusahaan" class="w-3/4 md:w-full">
      </div>
    </div>
  </section>

  <section id="lowongan" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold mb-12" data-aos="fade-up">Lowongan Pekerjaan</h2>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Card Lowongan (Looped) -->
        <div
          class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between"
          data-aos="fade-up">
          <div>
            <p class="text-xs text-gray-400 mb-2">20 Maret - 20 Juni 2025</p>
            <h3 class="text-lg font-bold text-gray-800 mb-1">Operator Produksi</h3>
            <p class="text-sm text-gray-600">PT XYZ Berkah Indonesia Jaya</p>
          </div>
          <a href="#"
            class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-xl text-sm transition">Detail
            Lowongan</a>
        </div>

        <div
          class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between"
          data-aos="fade-up" data-aos-delay="100">
          <div>
            <p class="text-xs text-gray-400 mb-2">20 Maret - 20 Juni 2025</p>
            <h3 class="text-lg font-bold text-gray-800 mb-1">Operator Produksi</h3>
            <p class="text-sm text-gray-600">PT XYZ Berkah Indonesia Jaya</p>
          </div>
          <a href="#"
            class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-xl text-sm transition">Detail
            Lowongan</a>
        </div>

        <div
          class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between"
          data-aos="fade-up" data-aos-delay="200">
          <div>
            <p class="text-xs text-gray-400 mb-2">20 Maret - 20 Juni 2025</p>
            <h3 class="text-lg font-bold text-gray-800 mb-1">Operator Produksi</h3>
            <p class="text-sm text-gray-600">PT XYZ Berkah Indonesia Jaya</p>
          </div>
          <a href="#"
            class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-xl text-sm transition">Detail
            Lowongan</a>
        </div>

        <div
          class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 flex flex-col justify-between"
          data-aos="fade-up" data-aos-delay="300">
          <div>
            <p class="text-xs text-gray-400 mb-2">20 Maret - 20 Juni 2025</p>
            <h3 class="text-lg font-bold text-gray-800 mb-1">Operator Produksi</h3>
            <p class="text-sm text-gray-600">PT XYZ Berkah Indonesia Jaya</p>
          </div>
          <a href="#"
            class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white text-center py-2 rounded-xl text-sm transition">Detail
            Lowongan</a>
        </div>

      </div>
    </div>
  </section>
















  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      offset: 50,
      once: true,
    });
  </script>
</body>

</html>