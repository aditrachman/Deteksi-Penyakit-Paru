<?php
/**
 * File: koneksi.php (MOCK VERSION)
 * Deskripsi: Simulasi database menggunakan array karena MySQL server tidak tersedia di sandbox.
 */

// Data Gejala
$gejala_data = [
    ['id_gejala' => 'G01', 'nama_gejala' => 'Batuk kering terus-menerus'],
    ['id_gejala' => 'G02', 'nama_gejala' => 'Batuk'],
    ['id_gejala' => 'G03', 'nama_gejala' => 'Demam'],
    ['id_gejala' => 'G04', 'nama_gejala' => 'Nyeri dada'],
    ['id_gejala' => 'G05', 'nama_gejala' => 'Batuk berdarah'],
    ['id_gejala' => 'G06', 'nama_gejala' => 'Sesak napas'],
    ['id_gejala' => 'G07', 'nama_gejala' => 'Batuk >= 3 minggu / batuk kronik'],
    ['id_gejala' => 'G08', 'nama_gejala' => 'Dada sesak / nyeri / terasa berat'],
    ['id_gejala' => 'G09', 'nama_gejala' => 'Batuk berdahak (dapat disertai bercak darah)'],
    ['id_gejala' => 'G10', 'nama_gejala' => 'Menggigil'],
    ['id_gejala' => 'G11', 'nama_gejala' => 'Suhu tubuh > 38°C'],
    ['id_gejala' => 'G12', 'nama_gejala' => 'Batuk berdahak'],
    ['id_gejala' => 'G13', 'nama_gejala' => 'Infeksi saluran pernapasan (flu/pilek)'],
    ['id_gejala' => 'G14', 'nama_gejala' => 'Berat badan menurun'],
    ['id_gejala' => 'G15', 'nama_gejala' => 'Suara mengi / "ngik" saat bernapas'],
    ['id_gejala' => 'G16', 'nama_gejala' => 'Dada terasa penuh'],
    ['id_gejala' => 'G17', 'nama_gejala' => 'Nyeri punggung / pinggul / bahu / pangkal paha'],
    ['id_gejala' => 'G18', 'nama_gejala' => 'Asma nokturnal (04.00-06.00)'],
    ['id_gejala' => 'G19', 'nama_gejala' => 'Batuk memberat pada malam hari'],
    ['id_gejala' => 'G20', 'nama_gejala' => 'Riwayat keluarga asma'],
    ['id_gejala' => 'G21', 'nama_gejala' => 'Cepat lelah'],
    ['id_gejala' => 'G22', 'nama_gejala' => 'Batuk berdahak kental (kuning/hijau/bercampur)'],
    ['id_gejala' => 'G23', 'nama_gejala' => 'Dahak mukoid atau purulen'],
    ['id_gejala' => 'G24', 'nama_gejala' => 'Pembengkakan kelenjar getah bening'],
    ['id_gejala' => 'G25', 'nama_gejala' => 'Nyeri menyebar ke punggung atau bahu'],
    ['id_gejala' => 'G26', 'nama_gejala' => 'Suara serak / sulit berbicara'],
    ['id_gejala' => 'G27', 'nama_gejala' => 'Pembengkakan wajah atau leher'],
    ['id_gejala' => 'G28', 'nama_gejala' => 'Nafsu makan menurun'],
    ['id_gejala' => 'G29', 'nama_gejala' => 'Keringat malam'],
    ['id_gejala' => 'G30', 'nama_gejala' => 'Sianosis (kuku/bibir kebiruan)'],
];

// Data Penyakit
$penyakit_data = [
    ['id_penyakit' => 'P01', 'nama_penyakit' => 'Kanker Paru'],
    ['id_penyakit' => 'P02', 'nama_penyakit' => 'Bronkitis'],
    ['id_penyakit' => 'P03', 'nama_penyakit' => 'Pneumonia'],
    ['id_penyakit' => 'P04', 'nama_penyakit' => 'Tuberkulosis Paru'],
    ['id_penyakit' => 'P05', 'nama_penyakit' => 'PPOK (Penyakit Paru Obstruktif Kronis)'],
    ['id_penyakit' => 'P06', 'nama_penyakit' => 'Asma Bronkial'],
    ['id_penyakit' => 'P07', 'nama_penyakit' => 'Abses Paru'],
    ['id_penyakit' => 'P08', 'nama_penyakit' => 'ISPA (Infeksi Saluran Pernapasan Akut)'],
];

// Data Aturan
$aturan_data = [
    'P01' => ['G07', 'G05', 'G04', 'G14', 'G29'],
    'P02' => ['G12', 'G06', 'G03'],
    'P03' => ['G11', 'G10', 'G12', 'G04'],
    'P04' => ['G07', 'G29', 'G14', 'G28'],
    'P05' => ['G06', 'G07', 'G21'],
    'P06' => ['G15', 'G06', 'G20', 'G18'],
    'P07' => ['G23', 'G03', 'G10'],
    'P08' => ['G02', 'G13', 'G03'],
];

// Fungsi pembantu untuk mensimulasikan query
function get_gejala() { global $gejala_data; return $gejala_data; }
function get_penyakit() { global $penyakit_data; return $penyakit_data; }
function get_aturan($id_p) { global $aturan_data; return $aturan_data[$id_p] ?? []; }
function get_nama_gejala($id_g) {
    global $gejala_data;
    foreach($gejala_data as $g) if($g['id_gejala'] == $id_g) return $g['nama_gejala'];
    return "";
}
?>
