<?php
$file = fopen("mahasiswa.txt", "r");
$mahasiswa = [];

if ($file) {
    while (($line = fgets($file)) !== false) {
        $mahasiswa[] = json_decode($line, true);
    }
    fclose($file);
    echo json_encode($mahasiswa);
} else {
    echo json_encode([]);
}
?>
