<?php

$inputText = $_POST['input_text'];
$inputZone = $_POST['input_zone'];
$inputKode = $_POST['input_kode'];
$inputItem = $_POST['input_item'];
$inputHarga = $_POST['input_harga'];
$inputWa = $_POST['input_wa'];

// Lakukan pemrosesan API dan dapatkan hasilnya
$apiidResult = $inputText;
$apizoneResult = $inputZone;
$apikodeResult = $inputKode;
$apiitemResult = $inputItem;
$apihargaResult = $inputHarga;
$apiwaResult    = $inputWa; 

// Data yang akan dikirim sebagai form-data
$data = array(
  'key' => '9NHJKX92dTl3grWYYR2Tqnpewr5uAwrTYgtWldf1iVIZQ0t9LHK90iIieNzHTWDl',
  'sign' => 'cbdb7601685a364045380c6a7a3e613a',
  'type' => 'get-nickname',
  'code' => 'mobile-legends',
  'target' => $inputText,
  'additional_target' => $inputZone
);


// URL API yang akan dituju
$url = 'https://vip-reseller.co.id/api/game-feature?key=9NHJKX92dTl3grWYYR2Tqnpewr5uAwrTYgtWldf1iVIZQ0t9LHK90iIieNzHTWDl&sign=cbdb7601685a364045380c6a7a3e613a';

// IP yang diizinkan pada whitelist
$allowedIP = '114.79.32.125';

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
$nama = $username['data'] . "(Jika Username sudah ada tidak perlu Verify lagi)"; // Output: 25
$name = $username['data'];
$message = $username['message']; // Output: New York

// Menutup koneksi cURL
curl_close($ch);

// Menampilkan hasil respon dari API
//print_r($response);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 0);
?>


<?php

$token = "S-r5C7t-ad-9G_Paopf6";
$nowa = $_POST['nomoradmin'];
$target = $nowa;

$curl = curl_init();

$pesan = '
*[Halo Tristan Ada pesanan nih]*
#Type: Order
#service: ' . $apikodeResult . '
#username: ' . $name . '
#data no (id-user): ' . $apiidResult . '
#data zone: ' . $apizoneResult . '
#item: ' . $apiitemResult . '
#harga: ' . $apihargaResult . '
#WA Pembeli: ' . $apiwaResult . '
#status: _Pending_
=====================
Jika item sudah lunas silahkan tulis *YES*
=====================
Atau klik link berikut: 
https://zeatopup.000webhostapp.com/send/zea.otp.id=+6219371097321jwoepjrowpwne';

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
  'target' => $target,
'message' => $pesan,
'url' => 'https://zeazure.com/asset/logo_light.png',

),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// Memberikan delay selama 5 detik sebelum melakukan request API
sleep(5);

$token = "S-r5C7t-ad-9G_Paopf6";
$wauser = $apiwaResult;

$curl = curl_init();

$pesanan = '*[Halo Berikut Adalah Pesanan Anda]*
#Type: Order
#Id Game: ' . $apiidResult . '
#Username: ' . $name . '
#item: ' . $apiitemResult . '
#harga: ' . $apihargaResult . '
#status: _Pending_
=====================
Infromasi :
Toko buka [16:00-22:00]
Hari Libur [07:00-22:00]
=====================
Untuk membayar dapat mengikuti link berikut:
https://trakteer.id/zeazure/link
*(*jangan lupa tulis nomor telepon pembeli pada "Pesan Dukungan")*
=====================
Jika sudah membayar konfirmasi dengan menulis:
#sudahbayar
#help (jika butuh bantuan)';


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => $apiwaResult,
'message' => $pesanan,
'url' => 'https://trakteer.id/zeazure/link',

),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/asset/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="mobile_style.css">
    <title>Mobile Legends | ZEATOPUP Tempat Topup Murah & Bebas Biaya Admin</title>
</head>

<body>
    <div class="container" id="container">
        <div class="header" id="scrollDiv">
            <div class="logo">
                <img src="/asset/logo_light.png" alt="">
            </div>
            <div class="tab">
                <h4>Form</h4>
                <h4>Pembelian</h4>
            </div>
        </div>
        <div class="isian">
            <div class="isi">
                <div class="topup">
                    <div class="data">
                        <div class="judul">
                            <h2>Masukan Data Game</h2>
                        </div>
                        <div class="game">
                            <div class="kotak">
                                <p>User ID</p>
                                <input id="user-id" type="id" name="id-user" placeholder="Contoh: 123456789" value="<?php echo $apiidResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>User ID Zone</p>
                                <input id="id-zone" type="id-zone" name="id-user" placeholder="Contoh: 01234" value="<?php echo $apizoneResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Nomor WhatsApp Aktif</p>
                                <input style="background-color: #fff;" id="inputwa" type="id" name="output_wa" placeholder="Contoh : 6201234567 (bukan +62/08)" value="<?php echo $apiwaResult; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="judul">
                        <h2>Pilih Item</h2>
                    </div>
                    <div class="data">
                        <button id="dm-1" class="btn-item" onclick="changeColor(this)" alt="">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">5 Diamond</p>
                            <p class="Bawah">Rp.2.000,00</p>
                        </button>
                        <button id="dm-2" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">14 Diamonds</p>
                            <p class="Bawah">Rp.4.000,00</p>
                        </button>
                        <button id="dm-3" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">42 Diamonds</p>
                            <p class="Bawah">Rp.11.000,00</p>
                        </button>
                        <button id="dm-4" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">56 Diamonds</p>
                            <p class="Bawah">Rp.14.000,00</p>
                        </button>
                        <button id="dm-5" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">70 Diamonds</p>
                            <p class="Bawah">Rp.17.000,00</p>
                        </button>
                        <button id="dm-6" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">85 Diamonds</p>
                            <p class="Bawah">Rp.21.000,00</p>
                        </button>
                        <button id="dm-7" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">86 Diamonds</p>
                            <p class="Bawah">Rp.22.000,00</p>
                        </button>
                        <button id="dm-8" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/weekly.png" alt="">
                            <p class="atas">Weekly Diamond</p>
                            <p class="Bawah">Rp.27.000,00</p>
                        </button>
                        <button id="dm-9" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">112 Diamonds</p>
                            <p class="Bawah">Rp28.000,00</p>
                        </button>
                        <button id="dm-10" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">114 Diamonds</p>
                            <p class="Bawah">Rp29.000,00</p>
                        </button>
                        <button id="dm-11" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">140 Diamonds</p>
                            <p class="Bawah">Rp34.000,00</p>
                        </button>
                        <button id="dm-12" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">172 Diamonds</p>
                            <p class="Bawah">Rp43.000,00</p>
                        </button>
                        <button id="dm-13" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">257 Diamonds</p>
                            <p class="Bawah">Rp.63.000,00</p>
                        </button>
                        <button id="dm-14" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">284 Diamonds</p>
                            <p class="Bawah">Rp.69.000,00</p>
                        </button>
                        <button id="dm-15" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">285 Diamonds</p>
                            <p class="Bawah">Rp.70.000,00</p>
                        </button>
                        <button id="dm-16" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">344 Diamonds</p>
                            <p class="Bawah">Rp.83.000,00</p>
                        </button>
                        <button id="dm-17" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">400 Diamonds + bonus 29 Diamonds</p>
                            <p class="Bawah">Rp.103.000,00</p>
                        </button>
                        <button id="dm-18" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">429 Diamonds</p>
                            <p class="Bawah">Rp.104.000,00</p>
                        </button>
                        <button id="dm-19" class="btn-item" onclick="changeColor(this)">
                            <img src="/asset/diamond.png" alt="">
                            <p class="atas">514 Diamonds</p>
                            <p class="Bawah">Rp.124.000,00</p>
                        </button>
                    </div>
                </div>
                <form method="POST" action="" class="konfirmasi" id="parralax-mode">
                    <div class="data">
                        <div class="judul">
                            <h2>Konfirmasi</h2>
                        </div>
                        <div class="game">
                            <div class="kotak">
                                <div class="title">
                                    <p>Id User</p>
                                </div>
                                <div class="isi">
                                    <input name="input_text" id="output-id" type="id" style="margin: 0;" placeholder="ID Anda Salah" readonly value="<?php echo $apiidResult; ?>">
                                    <button type="sumbit" id="btn_sumbit" onclick="simpanData()">Verify</button>
                                </div>
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Nomor Admin</p>
                                <input id="adminwa" type="id" name="nomoradmin" placeholder="hi" readonly value="">
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Id Zone</p>
                                <input name="input_zone" id="output-zone" type="id" placeholder="ID Anda Salah" readonly value=" <?php echo $apizoneResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Username</p>
                                <input id="hasil" type="id" name="id-user" placeholder="" readonly value="<?php echo $nama; ?>">
                                <span style="font-size: 15px;">Keterangan, <?php echo $message; ?></span>
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Kode Item</p>
                                <input name="input_kode" id="kode-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apikodeResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Item</p>
                                <input name="input_item" id="item-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apiitemResult; ?>">
                            </div>
                            <div class="kotak">
                                <p>Harga Item</p>
                                <input name="input_harga" id="harga-data" type="id" name="id-user" placeholder="Silahkan Pilih Item" readonly value="<?php echo $apihargaResult; ?>">
                            </div>
                            <div class="kotak" style="display: none;">
                                <p>Nomor WhatsApp Aktif</p>
                                <input style="background-color: #fff;" id="outputwa" type="id" name="input_wa" placeholder="Contoh : 6201234567 (bukan +62/08)" value="<?php echo $apiwaResult; ?>">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="pembayaran" id="parralax-mode">
                    <div class="data">
                        <div class="judul">
                            <h2>pembayaran</h2>
                        </div>
                        <div class="game">
                            <div class="peringatan">
                                <div class="judul">
                                    <h2>Informasi</h2>
                                </div>
                                <div class="isi">
                                    <p><center>
                                        Selanjutnya, pembayaran akan kami alihkan 
                                        menggunakan trakteer, pastikan data yang anda 
                                        masukan sudah benar, Bukti transaksi akan kami kabarkan melalui 
                                        nomor WA di atas, Terima Kasih
                                    </center> </p>             
                                </div>
                            </div>
                        </div>
                        <a href="konfirmasi.html" id="btnRequestAPI">
                            <p>Bayar</p>
                        </a>
                    </div>
                </div>     
            </div>    
        </div>
        <div class="footer">
            <div class="title">
                <div class="logo">
                    <img src="/asset/logo_light.png" alt="">
                </div>
                <div class="slogan">
                    <p>Layanan topup game</p>
                </div>
            </div>
            <div class="isian">
                <div class="menu">
                    <div class="text">
                        <h2>GAME</h2>
                        <p>Free Fire</p>
                        <p>Mobile Legends</p>
                        <p>Valorant</p>
                        <p>PUBG</p>
                        <p>CODM</p>
                        <p>Genshin Impact</p>
                    </div>
                </div>
                <div class="medsos">
                    <div class="text">
                        <h2>MEDSOS</h2>
                        <p>@zeazure.ofc</p>
                    </div>
                </div>
                <div class="kontak">
                    <div class="text">
                        <h2>KONTAK</h2>
                        <p>+62-881-4062-549</p>
                        <p>zea.zeazure@gmail.com</p>
                    </div>
                </div>
                <div id="kontak">
                    <div class="text">
                        <center>
                            <h2>Kontak</h2>
                            <p>@zeazure.ofc</p>
                            <p>+62 881-4062-549</p>
                            <p>zea.zeazure@gmail.com</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/system/default.js"></script>
<script src="/system/item-ml.js"></script>
<!--script>
        function simpanData() {
      var inputData = document.getElementById("output-id").value;
      localStorage.setItem("data", inputData);
      window.location.href = "system-send.php";
    }
</script-->
</html>

