<?php

// URL API
$url = 'https://api.trakteer.id/v1/public/current-balance?key=trapi-mDbUL8Vg1CtnhckMGl169W7D';

// Data yang akan dikirim dalam body
$data = array(
    'key' => 'trapi-mDbUL8Vg1CtnhckMGl169W7D',
);

// Mengubah data menjadi format JSON
$jsonData = json_encode($data);

// Mengatur header permintaan
$headers = array(
    'Content-Type: application/json', // Tipe konten sebagai JSON
    'Authorization: Bearer your_token' // Header otorisasi (jika diperlukan)
);

// Inisialisasi cURL
$ch = curl_init($url);

// Mengatur opsi cURL
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // Metode permintaan
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData); // Data JSON yang dikirim dalam body
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Header permintaan

// Eksekusi permintaan cURL
$response = curl_exec($ch);

// Menghentikan cURL
curl_close($ch);

// Menampilkan respon
echo $response;

?>
