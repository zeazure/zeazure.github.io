<?php
// Data yang akan dikirim sebagai form-data
$data = array(
  'key' => 'yHL76XKfusIVED9TdL9FQbr27X5Jey9q9GrQjFkgWjanVGXThtoh9IWSJlmyYD0D',
  'sign' => '58898cae8374072f6bfe44d75a5ea71b',
  'type' => 'get-nickname',
  'code' => 'mobile-legends',
  'target' =>1358684133 '',
  'additional_target' => '15573'
);


// URL API yang akan dituju
$url = 'https://vip-reseller.co.id/api/game-feature?key=yHL76XKfusIVED9TdL9FQbr27X5Jey9q9GrQjFkgWjanVGXThtoh9IWSJlmyYD0D&sign=58898cae8374072f6bfe44d75a5ea71b';

// IP yang diizinkan pada whitelist
$allowedIP = '114.79.51.255';

// Membuat instansi cURL
$ch = curl_init();

// Mengatur opsi cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: multipart/form-data',
  'X-Forwarded-For: ' . $allowedIP
));

// Setelah Anda mendapatkan respon dari API
$response = curl_exec($ch);

$response = json_decode($response, true);

$username = $response;

$result = $username['result']; // Output: John
$nama = $username['data']; // Output: 25
$message = $username['message']; // Output: New York


// Memeriksa jika terjadi error
if (curl_errno($ch)) {
  $error = curl_error($ch);
  // Lakukan penanganan error sesuai kebutuhan
  // ...
}

// Menutup koneksi cURL
curl_close($ch);

// Menampilkan hasil respon dari API
print_r($response);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Welcome, <?php echo $nama; ?></h1>
</body>
</html>
