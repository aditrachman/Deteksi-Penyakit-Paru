<?php
/**
 * File: index.php
 * Deskripsi: Halaman utama aplikasi sistem pakar diagnosa penyakit paru.
 * Menggunakan Tailwind CSS untuk styling.
 */
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Paru-Paru</title>
    <!-- Menggunakan Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sistem Pakar Paru</h1>
            <div class="space-x-4">
                <a href="index.php" class="hover:underline">Beranda</a>
                <a href="diagnosa.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50 transition">Mulai Diagnosa</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="container mx-auto mt-10 p-6 bg-white rounded-xl shadow-md border border-gray-100">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-2/3">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Deteksi Dini Kesehatan Paru Anda</h2>
                <p class="text-gray-600 text-lg mb-6">
                    Aplikasi ini membantu Anda mengenali kemungkinan penyakit paru-paru berdasarkan gejala yang Anda rasakan menggunakan metode Forward Chaining.
                </p>
                <a href="diagnosa.php" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-bold hover:bg-blue-700 shadow-lg transform hover:scale-105 transition">
                    Cek Sekarang
                </a>
            </div>
            <div class="md:w-1/3 mt-8 md:mt-0 flex justify-center">
                <!-- Placeholder Icon Paru -->
                <div class="w-48 h-48 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Info Section -->
    <section class="container mx-auto mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-blue-500">
            <h3 class="font-bold text-xl mb-2">Mudah Digunakan</h3>
            <p class="text-gray-600">Cukup pilih gejala yang Anda alami dan sistem akan memberikan hasil analisis secara instan.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-green-500">
            <h3 class="font-bold text-xl mb-2">Berbasis Data</h3>
            <p class="text-gray-600">Menggunakan basis pengetahuan yang disusun dari berbagai jurnal penelitian kesehatan paru.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow border-t-4 border-yellow-500">
            <h3 class="font-bold text-xl mb-2">Gratis & Cepat</h3>
            <p class="text-gray-600">Akses kapan saja tanpa biaya untuk mendapatkan informasi awal mengenai kondisi kesehatan Anda.</p>
        </div>
    </section>

    <footer class="bg-gray-800 text-white text-center p-6 mt-auto">
        <p>&copy; 2025 Sistem Pakar Paru - Tugas Akhir</p>
    </footer>

</body>
</html>
