# 🫁 Sistem Pakar Paru - Aplikasi Diagnosa Penyakit Paru-Paru

Aplikasi berbasis web untuk deteksi dini penyakit paru-paru menggunakan teknologi **Artificial Intelligence** dengan metode **Forward Chaining**. Dibangun dengan **PHP Native** dan **Tailwind CSS** untuk tampilan modern dan responsif.

---

## 📋 Daftar Isi

- [Fitur Utama](#fitur-utama)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Cara Penggunaan](#cara-penggunaan)
- [Struktur File](#struktur-file)
- [Basis Pengetahuan](#basis-pengetahuan)
- [Cara Kerja Sistem](#cara-kerja-sistem)
- [Screenshot](#screenshot)
- [Troubleshooting](#troubleshooting)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

---

## ✨ Fitur Utama

### 🎯 Fitur Inti
- **Diagnosa Cepat**: Analisis gejala dalam hitungan detik menggunakan algoritma Forward Chaining
- **8 Jenis Penyakit**: Dapat mendeteksi 8 jenis penyakit paru-paru yang berbeda
- **30+ Gejala**: Database komprehensif dengan lebih dari 30 gejala terukur
- **Basis Data Jurnal**: Didasarkan pada 5 jurnal penelitian kesehatan terkemuka

### 🎨 Fitur UI/UX
- **Desain Modern**: Menggunakan Tailwind CSS dengan gradient dan animasi smooth
- **Responsif**: Kompatibel dengan desktop, tablet, dan mobile
- **Glassmorphism**: Efek kaca transparan modern untuk tampilan premium
- **Animasi Interaktif**: Animasi slide, pulse, dan float untuk pengalaman pengguna yang menarik
- **Progress Bar Visual**: Visualisasi tingkat kecocokan gejala dengan progress bar animasi

### 🔒 Fitur Keamanan
- **Tanpa Penyimpanan Data**: Data pengguna tidak disimpan di server
- **Proses Lokal**: Semua perhitungan dilakukan di sisi klien
- **Gratis & Aman**: Tidak ada biaya tersembunyi atau pengumpulan data pribadi

---

## 🛠️ Teknologi yang Digunakan

| Komponen | Teknologi | Versi |
|----------|-----------|-------|
| **Backend** | PHP Native | 7.4+ |
| **Frontend** | HTML5, CSS3, JavaScript | ES6+ |
| **CSS Framework** | Tailwind CSS | 3.x |
| **Database** | MySQL/MariaDB (Opsional) | 5.7+ |
| **Server** | Apache/Nginx | Latest |
| **Browser** | Modern Browser | Chrome, Firefox, Safari, Edge |

---

## 📦 Persyaratan Sistem

### Minimum Requirements
- **PHP**: 7.4 atau lebih tinggi
- **RAM**: 256 MB
- **Disk Space**: 50 MB
- **Browser**: Modern browser dengan JavaScript enabled

### Recommended Requirements
- **PHP**: 8.0 atau lebih tinggi
- **RAM**: 512 MB atau lebih
- **Disk Space**: 100 MB
- **Server**: Apache 2.4+ atau Nginx 1.18+
- **Database**: MySQL 5.7+ atau MariaDB 10.3+

---

## 🚀 Instalasi

### Metode 1: Instalasi Lokal (Recommended untuk Development)

#### Step 1: Download/Clone Repository
```bash
# Clone dari repository (jika tersedia)
git clone https://github.com/username/sistem-pakar-paru.git
cd sistem_pakar_paru

# Atau extract file ZIP
unzip sistem_pakar_paru.zip
cd sistem_pakar_paru
```

#### Step 2: Pastikan PHP Terinstall
```bash
# Cek versi PHP
php -v

# Jika belum terinstall, install PHP
# Ubuntu/Debian
sudo apt-get update
sudo apt-get install php php-cli php-common

# macOS (menggunakan Homebrew)
brew install php

# Windows
# Download dari https://www.php.net/downloads
```

#### Step 3: Jalankan Server Development
```bash
# Navigasi ke direktori proyek
cd /path/to/sistem_pakar_paru

# Jalankan built-in PHP server
php -S localhost:8000

# Atau dengan port berbeda
php -S 127.0.0.1:3000
```

#### Step 4: Akses Aplikasi
```
Buka browser dan kunjungi:
http://localhost:8000
```

---

### Metode 2: Instalasi di Server Production

#### Step 1: Upload File ke Server
```bash
# Menggunakan FTP atau SSH
# Pastikan file berada di public_html atau document root

# Menggunakan SCP (SSH Copy)
scp -r sistem_pakar_paru/ user@server.com:/var/www/html/
```

#### Step 2: Konfigurasi File Permissions
```bash
# Set permission folder
chmod 755 /var/www/html/sistem_pakar_paru
chmod 755 /var/www/html/sistem_pakar_paru/assets

# Set permission file
chmod 644 /var/www/html/sistem_pakar_paru/*.php
```

#### Step 3: Konfigurasi Virtual Host (Apache)
```apache
<VirtualHost *:80>
    ServerName sistempakar.com
    ServerAlias www.sistempakar.com
    DocumentRoot /var/www/html/sistem_pakar_paru
    
    <Directory /var/www/html/sistem_pakar_paru>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/sistempakar-error.log
    CustomLog ${APACHE_LOG_DIR}/sistempakar-access.log combined
</VirtualHost>
```

#### Step 4: Enable Virtual Host
```bash
# Enable site
sudo a2ensite sistempakar.conf

# Restart Apache
sudo systemctl restart apache2
```

---

## 📖 Cara Penggunaan

### Alur Penggunaan Aplikasi

#### 1️⃣ Halaman Utama (Home)
- Baca informasi tentang aplikasi
- Pahami fitur dan manfaat
- Klik tombol **"Mulai Diagnosa"** untuk memulai

#### 2️⃣ Halaman Form Diagnosa
```
Langkah-langkah:
1. Baca daftar gejala yang tersedia
2. Centang semua gejala yang Anda rasakan
3. Semakin banyak gejala yang dipilih, semakin akurat hasilnya
4. Klik tombol "Proses Diagnosa"
```

**Tips Penting:**
- Pilih minimal 1 gejala untuk memulai
- Jika tidak yakin dengan suatu gejala, lewati saja
- Hasil lebih akurat jika memilih semua gejala yang relevan

#### 3️⃣ Halaman Hasil Diagnosa
```
Hasil ditampilkan dengan:
- Nama penyakit
- Persentase kecocokan (0-100%)
- Kategori risiko (Rendah/Sedang/Tinggi)
- Gejala yang cocok
- Progress bar visual
```

**Interpretasi Hasil:**
- **80-100%**: Risiko Tinggi ⚠️ - Segera konsultasi dokter
- **50-79%**: Risiko Sedang ⚡ - Perlu perhatian medis
- **0-49%**: Risiko Rendah ✓ - Monitor kondisi Anda

---

## 📁 Struktur File

```
sistem_pakar_paru/
├── index.php              # Halaman utama dengan hero section
├── diagnosa.php           # Form input gejala
├── hasil.php              # Halaman hasil diagnosa dengan visualisasi
├── koneksi.php            # File koneksi database & data statis
├── database.sql           # File SQL untuk membuat database
├── README.md              # Dokumentasi ini
├── assets/
│   └── screenshots/       # Screenshot aplikasi
│       ├── halaman_utama_upgraded.png
│       ├── form_diagnosa_upgraded.png
│       └── hasil_diagnosa_1.png
└── .htaccess              # Konfigurasi Apache (opsional)
```

---

## 🧠 Basis Pengetahuan

### Daftar Penyakit yang Dapat Dideteksi

| Kode | Penyakit | Gejala Utama | Jumlah Gejala |
|------|----------|-------------|---------------|
| P01 | Kanker Paru | Batuk berdarah, batuk kronik, nyeri dada | 5 |
| P02 | Bronkitis | Batuk berdahak, sesak napas, demam | 3 |
| P03 | Pneumonia | Demam tinggi, batuk, menggigil | 4 |
| P04 | Tuberkulosis | Batuk kronik, keringat malam, berat badan turun | 4 |
| P05 | PPOK | Sesak napas, batuk kronik, cepat lelah | 3 |
| P06 | Asma Bronkial | Mengi, sesak napas, riwayat keluarga | 4 |
| P07 | Abses Paru | Dahak purulen, demam, batuk | 3 |
| P08 | ISPA | Batuk, demam, infeksi saluran napas | 3 |

### Daftar Gejala (30 Gejala)

```
G01 - Batuk kering terus-menerus
G02 - Batuk
G03 - Demam
G04 - Nyeri dada
G05 - Batuk berdarah
G06 - Sesak napas
G07 - Batuk >= 3 minggu / batuk kronik
G08 - Dada sesak / nyeri / terasa berat
G09 - Batuk berdahak (dapat disertai bercak darah)
G10 - Menggigil
G11 - Suhu tubuh > 38°C
G12 - Batuk berdahak
G13 - Infeksi saluran pernapasan (flu/pilek)
G14 - Berat badan menurun
G15 - Suara mengi / "ngik" saat bernapas
G16 - Dada terasa penuh
G17 - Nyeri punggung / pinggul / bahu / pangkal paha
G18 - Asma nokturnal (04.00-06.00)
G19 - Batuk memberat pada malam hari
G20 - Riwayat keluarga asma
G21 - Cepat lelah
G22 - Batuk berdahak kental (kuning/hijau/bercampur)
G23 - Dahak mukoid atau purulen
G24 - Pembengkakan kelenjar getah bening
G25 - Nyeri menyebar ke punggung atau bahu
G26 - Suara serak / sulit berbicara
G27 - Pembengkakan wajah atau leher
G28 - Nafsu makan menurun
G29 - Keringat malam
G30 - Sianosis (kuku/bibir kebiruan)
```

---

## 🔄 Cara Kerja Sistem

### Algoritma Forward Chaining

**Forward Chaining** adalah metode inferensi yang bekerja dari **fakta menuju kesimpulan**.

#### Proses Kerja:

```
1. INPUT: Pengguna memilih gejala yang dialami
   ↓
2. MATCHING: Sistem mencocokkan gejala dengan basis pengetahuan
   ↓
3. CALCULATION: Menghitung persentase kecocokan untuk setiap penyakit
   Formula: (Jumlah Gejala Cocok / Total Gejala Aturan) × 100%
   ↓
4. SORTING: Mengurutkan hasil dari persentase tertinggi ke terendah
   ↓
5. OUTPUT: Menampilkan hasil diagnosa dengan visualisasi
```

#### Contoh Perhitungan:

```
Gejala Terpilih: G06, G15, G20
Penyakit: Asma Bronkial (P06)
Gejala Aturan P06: G06, G15, G20, G18

Perhitungan:
- Gejala Cocok: G06, G15, G20 (3 gejala)
- Total Gejala Aturan: 4 gejala
- Persentase = (3 / 4) × 100% = 75%

Kategori Risiko: Sedang (50-79%)
```

---

## 📸 Screenshot

### 1. Halaman Utama
![Halaman Utama](assets/screenshots/halaman_utama_upgraded.png)
- Hero section dengan gradient background
- Informasi fitur aplikasi
- Tombol CTA (Call To Action)

### 2. Form Diagnosa
![Form Diagnosa](assets/screenshots/form_diagnosa_upgraded.png)
- Grid layout gejala yang rapi
- Custom checkbox dengan animasi
- Tips penggunaan

### 3. Hasil Diagnosa
![Hasil Diagnosa](assets/screenshots/hasil_diagnosa_1.png)
- Kartu hasil dengan ranking (🥇🥈🥉)
- Progress bar animasi
- Kategori risiko dengan warna berbeda
- Daftar gejala yang cocok

---

## 🧪 Pengujian Aplikasi

### Test Case 1: Asma Bronkial (75%)
```
Gejala Terpilih:
- G06: Sesak napas
- G15: Suara mengi / "ngik" saat bernapas
- G20: Riwayat keluarga asma

Hasil: Asma Bronkial - 75% (Risiko Sedang)
```

### Test Case 2: ISPA (100%)
```
Gejala Terpilih:
- G02: Batuk
- G03: Demam
- G13: Infeksi saluran pernapasan (flu/pilek)

Hasil: ISPA - 100% (Risiko Rendah)
```

### Test Case 3: Kanker Paru (40%)
```
Gejala Terpilih:
- G05: Batuk berdarah
- G07: Batuk >= 3 minggu / batuk kronik

Hasil: Kanker Paru - 40% (Risiko Rendah)
```

---

## 🔧 Konfigurasi

### File koneksi.php

```php
// Data statis gejala
$gejala = [
    ['id_gejala' => 'G01', 'nama_gejala' => 'Batuk kering terus-menerus'],
    // ... gejala lainnya
];

// Data statis penyakit
$penyakit = [
    ['id_penyakit' => 'P01', 'nama_penyakit' => 'Kanker Paru'],
    // ... penyakit lainnya
];

// Aturan penyakit-gejala
$aturan = [
    'P01' => ['G07', 'G05', 'G04', 'G14', 'G29'],
    // ... aturan lainnya
];
```

### Menambah Gejala Baru

1. Buka file `koneksi.php`
2. Tambahkan gejala ke array `$gejala`:
```php
['id_gejala' => 'G31', 'nama_gejala' => 'Gejala Baru']
```
3. Update aturan penyakit jika diperlukan

### Menambah Penyakit Baru

1. Buka file `koneksi.php`
2. Tambahkan penyakit ke array `$penyakit`:
```php
['id_penyakit' => 'P09', 'nama_penyakit' => 'Penyakit Baru']
```
3. Tambahkan aturan untuk penyakit baru:
```php
'P09' => ['G01', 'G02', 'G03']
```

---

## 🐛 Troubleshooting

### Masalah: Halaman Putih / Error 500

**Solusi:**
```bash
# 1. Cek error log PHP
tail -f /var/log/apache2/error.log

# 2. Enable error reporting di PHP
# Tambahkan di awal file PHP:
error_reporting(E_ALL);
ini_set('display_errors', 1);

# 3. Cek permission file
chmod 644 *.php
chmod 755 assets/
```

### Masalah: Form Tidak Bisa Disubmit

**Solusi:**
```bash
# 1. Cek JavaScript console (F12)
# 2. Pastikan method POST pada form
# 3. Cek nama input field sesuai dengan kode PHP
```

### Masalah: Styling Tidak Muncul (Tailwind)

**Solusi:**
```bash
# Tailwind dimuat dari CDN, pastikan internet connection aktif
# Jika offline, install Tailwind CSS locally:
npm install -D tailwindcss
npx tailwindcss build
```

### Masalah: Database Connection Error

**Solusi:**
```bash
# Jika ingin menggunakan database MySQL:
# 1. Update koneksi di koneksi.php
# 2. Import database.sql ke MySQL
# 3. Update credentials database

mysql -u root -p < database.sql
```

---

## 📚 Referensi Jurnal

Aplikasi ini didasarkan pada penelitian dari jurnal-jurnal berikut:

1. **Sistem Pakar Diagnosa Penyakit Pada Perokok...** (2021)
   - Metode: Forward Chaining
   - Gejala: 14, Penyakit: 4

2. **Sistem Pakar Untuk Diagnosa Penyakit Paru-Paru...** (2020)
   - Metode: Forward Chaining
   - Gejala: 13, Penyakit: 5

3. **Diagnosa Penyakit Paru-Paru dengan Metode...** (2022)
   - Metode: Forward Chaining & Certainty Factor
   - Gejala: 30, Penyakit: 6

4. **Sistem Pakar Untuk Diagnosa Penyakit Paru-Paru...** (2025)
   - Metode: Forward Chaining
   - Gejala: 27, Penyakit: 6

5. **Sistem Pakar Untuk Mendiagnosa Penyakit...** (2025)
   - Metode: Forward & Backward Chaining
   - Gejala: 44, Penyakit: 6

---

## 🚀 Pengembangan Lanjutan

### Fitur yang Direncanakan

- [ ] **Certainty Factor Integration**: Menambahkan bobot keyakinan pada setiap gejala
- [ ] **Export PDF**: Fitur cetak/export hasil diagnosa ke PDF
- [ ] **Multi-language Support**: Dukungan bahasa Inggris, Mandarin, dll
- [ ] **Mobile App**: Aplikasi mobile native untuk iOS dan Android
- [ ] **API Integration**: REST API untuk integrasi dengan aplikasi lain
- [ ] **User Dashboard**: Dashboard untuk tracking riwayat diagnosa
- [ ] **Admin Panel**: Panel admin untuk mengelola gejala dan penyakit
- [ ] **Machine Learning**: Integrasi ML untuk meningkatkan akurasi

---

## 📞 Dukungan & Kontak

Jika mengalami masalah atau memiliki pertanyaan:

- **Email**: support@sistempakar.com
- **WhatsApp**: +62-XXX-XXXX-XXXX
- **GitHub Issues**: https://github.com/username/sistem-pakar-paru/issues

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **MIT License** - lihat file [LICENSE](LICENSE) untuk detail.

---

## ✍️ Kontribusi

Kami menyambut kontribusi dari komunitas! Berikut cara berkontribusi:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buka Pull Request

---

## 👨‍💻 Tim Pengembang

- **Nama**: Tugas Akhir Sistem Pakar
- **Institusi**: [Universitas Anda]
- **Tahun**: 2025

---

## 🙏 Ucapan Terima Kasih

Terima kasih kepada:
- Semua penulis jurnal yang menjadi referensi
- Komunitas open-source
- Tailwind CSS untuk framework CSS yang luar biasa
- Semua kontributor dan pengguna aplikasi ini

---

**Dibuat dengan ❤️ untuk kesehatan Anda**

*Disclaimer: Aplikasi ini hanya untuk referensi awal. Silakan konsultasikan dengan dokter profesional untuk diagnosis dan pengobatan yang tepat.*

---

**Versi**: 1.0.0  
**Last Updated**: Desember 2025  
**Status**: ✅ Production Ready
