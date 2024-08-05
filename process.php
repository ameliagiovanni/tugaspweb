<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat = htmlspecialchars($_POST['alamat']);

    $mahasiswa = [
        'Nama' => $nama,
        'NIM' => $nim,
        'Tanggal Lahir' => $tgl_lahir,
        'Jenis Kelamin' => $jenis_kelamin,
        'Alamat' => $alamat
    ];

    $file = fopen("mahasiswa.txt", "a");
    fwrite($file, json_encode($mahasiswa) . "\n");
    fclose($file);

    echo "Data mahasiswa telah disimpan. <a href='form.html'>Kembali</a>";
}
?>
