-- Database: sistem_pakar_paru
CREATE DATABASE IF NOT EXISTS sistem_pakar_paru;
USE sistem_pakar_paru;

-- Tabel Penyakit
CREATE TABLE IF NOT EXISTS penyakit (
    id_penyakit VARCHAR(5) PRIMARY KEY,
    nama_penyakit VARCHAR(100) NOT NULL,
    definisi TEXT,
    solusi TEXT
);

-- Tabel Gejala
CREATE TABLE IF NOT EXISTS gejala (
    id_gejala VARCHAR(5) PRIMARY KEY,
    nama_gejala VARCHAR(255) NOT NULL
);

-- Tabel Aturan (Basis Pengetahuan)
CREATE TABLE IF NOT EXISTS aturan (
    id_aturan INT AUTO_INCREMENT PRIMARY KEY,
    id_penyakit VARCHAR(5),
    id_gejala VARCHAR(5),
    FOREIGN KEY (id_penyakit) REFERENCES penyakit(id_penyakit),
    FOREIGN KEY (id_gejala) REFERENCES gejala(id_gejala)
);

-- Data Penyakit (Berdasarkan PDF)
INSERT INTO penyakit (id_penyakit, nama_penyakit) VALUES
('P01', 'Kanker Paru'),
('P02', 'Bronkitis'),
('P03', 'Pneumonia'),
('P04', 'Tuberkulosis Paru'),
('P05', 'PPOK (Penyakit Paru Obstruktif Kronis)'),
('P06', 'Asma Bronkial'),
('P07', 'Abses Paru'),
('P08', 'ISPA (Infeksi Saluran Pernapasan Akut)');

-- Data Gejala (Berdasarkan PDF)
INSERT INTO gejala (id_gejala, nama_gejala) VALUES
('G01', 'Batuk kering terus-menerus'),
('G02', 'Batuk'),
('G03', 'Demam'),
('G04', 'Nyeri dada'),
('G05', 'Batuk berdarah'),
('G06', 'Sesak napas'),
('G07', 'Batuk >= 3 minggu / batuk kronik'),
('G08', 'Dada sesak / nyeri / terasa berat'),
('G09', 'Batuk berdahak (dapat disertai bercak darah)'),
('G10', 'Menggigil'),
('G11', 'Suhu tubuh > 38°C'),
('G12', 'Batuk berdahak'),
('G13', 'Infeksi saluran pernapasan (flu/pilek)'),
('G14', 'Berat badan menurun'),
('G15', 'Suara mengi / "ngik" saat bernapas'),
('G16', 'Dada terasa penuh'),
('G17', 'Nyeri punggung / pinggul / bahu / pangkal paha'),
('G18', 'Asma nokturnal (04.00-06.00)'),
('G19', 'Batuk memberat pada malam hari'),
('G20', 'Riwayat keluarga asma'),
('G21', 'Cepat lelah'),
('G22', 'Batuk berdahak kental (kuning/hijau/bercampur)'),
('G23', 'Dahak mukoid atau purulen'),
('G24', 'Pembengkakan kelenjar getah bening'),
('G25', 'Nyeri menyebar ke punggung atau bahu'),
('G26', 'Suara serak / sulit berbicara'),
('G27', 'Pembengkakan wajah atau leher'),
('G28', 'Nafsu makan menurun'),
('G29', 'Keringat malam'),
('G30', 'Sianosis (kuku/bibir kebiruan)');

-- Basis Pengetahuan (Asumsi berdasarkan literatur umum karena PDF tidak merinci rule secara eksplisit, 
-- namun kita buat representasi yang masuk akal untuk demo sistem pakar)
-- Kanker Paru (P01): Batuk kronis, batuk berdarah, nyeri dada, berat badan turun
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P01', 'G07'), ('P01', 'G05'), ('P01', 'G04'), ('P01', 'G14'), ('P01', 'G29');

-- Bronkitis (P02): Batuk berdahak, sesak napas, demam ringan
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P02', 'G12'), ('P02', 'G06'), ('P02', 'G03');

-- Pneumonia (P03): Demam tinggi, menggigil, batuk berdahak, nyeri dada
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P03', 'G11'), ('P03', 'G10'), ('P03', 'G12'), ('P03', 'G04');

-- Tuberkulosis Paru (P04): Batuk > 3 minggu, keringat malam, berat badan turun
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P04', 'G07'), ('P04', 'G29'), ('P04', 'G14'), ('P04', 'G28');

-- PPOK (P05): Sesak napas, batuk kronis, cepat lelah
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P05', 'G06'), ('P05', 'G07'), ('P05', 'G21');

-- Asma Bronkial (P06): Mengi, sesak napas, riwayat keluarga
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P06', 'G15'), ('P06', 'G06'), ('P06', 'G20'), ('P06', 'G18');

-- Abses Paru (P07): Batuk berdahak bau/purulen, demam, menggigil
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P07', 'G23'), ('P07', 'G03'), ('P07', 'G10');

-- ISPA (P08): Batuk, flu/pilek, demam
INSERT INTO aturan (id_penyakit, id_gejala) VALUES 
('P08', 'G02'), ('P08', 'G13'), ('P08', 'G03');
