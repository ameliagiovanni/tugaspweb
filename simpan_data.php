<?php
// Ambil data dari formulir
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Format data untuk disimpan dalam file
$data = "$nama,$nim,$tanggal_lahir,$alamat,$jenis_kelamin\n";

// File untuk menyimpan data
$nama_file = "mahasiswa.txt";

// Menyimpan data ke dalam file teks
try {
    $file = fopen($nama_file, 'a');
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Data berhasil disimpan dalam file $nama_file";
    } else {
        echo "Gagal membuka file $nama_file";
    }
} catch (Exception $e) {
    echo "Gagal menyimpan data: " . $e->getMessage();
}
?>
