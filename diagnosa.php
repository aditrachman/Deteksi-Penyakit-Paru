<?php
include 'koneksi.php';
$gejala_list = get_gejala();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Gejala - Sistem Pakar Paru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sistem Pakar Paru</h1>
            <a href="index.php" class="hover:underline">Kembali ke Beranda</a>
        </div>
    </nav>
    <main class="container mx-auto mt-10 p-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Form Diagnosa</h2>
            <p class="text-gray-600 mb-8 border-b pb-4">Silakan pilih gejala yang Anda rasakan saat ini.</p>
            <form action="hasil.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach($gejala_list as $row): ?>
                    <div class="flex items-center p-4 border rounded-lg hover:bg-blue-50 transition cursor-pointer">
                        <input type="checkbox" name="gejala[]" value="<?= $row['id_gejala']; ?>" id="<?= $row['id_gejala']; ?>" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
                        <label for="<?= $row['id_gejala']; ?>" class="ml-3 text-gray-700 font-medium cursor-pointer flex-grow">
                            <span class="text-blue-600 font-bold mr-2"><?= $row['id_gejala']; ?></span>
                            <?= $row['nama_gejala']; ?>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-10 flex justify-center">
                    <button type="submit" class="bg-blue-600 text-white px-10 py-4 rounded-full text-xl font-bold hover:bg-blue-700 shadow-xl transform hover:scale-105 transition">
                        Proses Diagnosa
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
