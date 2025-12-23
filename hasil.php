<?php
include 'koneksi.php';

if (!isset($_POST['gejala']) || empty($_POST['gejala'])) {
    echo "<script>alert('Silakan pilih minimal satu gejala!'); window.location='diagnosa.php';</script>";
    exit;
}

$gejala_terpilih = $_POST['gejala'];
$hasil_diagnosa = [];
$penyakit_list = get_penyakit();

foreach ($penyakit_list as $p) {
    $id_p = $p['id_penyakit'];
    $gejala_aturan = get_aturan($id_p);
    
    $cocok = array_intersect($gejala_terpilih, $gejala_aturan);
    $jumlah_cocok = count($cocok);
    $total_gejala_aturan = count($gejala_aturan);
    
    $persentase = ($total_gejala_aturan > 0) ? ($jumlah_cocok / $total_gejala_aturan) * 100 : 0;
    
    if ($jumlah_cocok > 0) {
        $hasil_diagnosa[] = [
            'id' => $id_p,
            'nama' => $p['nama_penyakit'],
            'persentase' => round($persentase, 2),
            'cocok' => $cocok
        ];
    }
}

usort($hasil_diagnosa, function($a, $b) {
    return $b['persentase'] <=> $a['persentase'];
});
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa - Sistem Pakar Paru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sistem Pakar Paru</h1>
            <a href="diagnosa.php" class="hover:underline">Diagnosa Ulang</a>
        </div>
    </nav>
    <main class="container mx-auto mt-10 p-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Hasil Analisis</h2>
            <?php if (empty($hasil_diagnosa)): ?>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6">
                    <p class="font-bold">Maaf!</p>
                    <p>Sistem tidak menemukan penyakit yang cocok.</p>
                </div>
            <?php else: ?>
                <div class="space-y-6">
                    <?php foreach ($hasil_diagnosa as $index => $hasil): ?>
                        <div class="<?= ($index == 0) ? 'bg-blue-50 border-2 border-blue-500' : 'bg-gray-50 border border-gray-200'; ?> p-6 rounded-xl">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-2xl font-bold <?= ($index == 0) ? 'text-blue-700' : 'text-gray-700'; ?>"><?= $hasil['nama']; ?></h3>
                                <span class="text-xl font-extrabold"><?= $hasil['persentase']; ?>%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                                <div class="bg-blue-600 h-4 rounded-full" style="width: <?= $hasil['persentase']; ?>%"></div>
                            </div>
                            <p class="text-sm text-gray-500">Gejala yang cocok: 
                                <?php 
                                    $nama_gejala_cocok = [];
                                    foreach($hasil['cocok'] as $id_g) {
                                        $nama_gejala_cocok[] = get_nama_gejala($id_g);
                                    }
                                    echo implode(", ", $nama_gejala_cocok);
                                ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="mt-10 flex justify-center space-x-4">
                <a href="diagnosa.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Diagnosa Ulang</a>
            </div>
        </div>
    </main>
</body>
</html>
