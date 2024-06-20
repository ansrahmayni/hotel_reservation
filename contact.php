<?php
require 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room_id = $_POST['room_id'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Menghitung jumlah hari
    $check_in_date = new DateTime($check_in);
    $check_out_date = new DateTime($check_out);
    $interval = $check_in_date->diff($check_out_date);
    $days = $interval->days;

    // Mengambil harga kamar
    $result = $conn->query("SELECT price FROM ruangan WHERE id=$room_id");
    $room = $result->fetch_assoc();
    $price = $room['price'];

    // Menghitung total biaya
    $total = $days * $price;

    $sql = "INSERT INTO reservasi (name, email, phone, room_id, check_in, check_out, total) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssissi", $name, $email, $phone, $room_id, $check_in, $check_out, $total);

    if ($stmt->execute()) {
        echo " ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
<?php include 'components/header.php';?>
    <section class="contact">
        <div class="gabungan">
            <h1 class="satu">Contact Us</h1>
            <hr class="garis"/>
            <p class="judulsatu">Hotel E-Link</p>
            <p class="para">Jl. Kota Taman Metropolitan No. 7 Blok XI B,</p>
            <p class="parasatu">Metland Transyogi, Cileungsi Kidul,</p>
            <p class="paradua">Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820</p>
        </div>
        <div class="gabungandua">
            <p class="okesatu">P. +62 21 8047 4747</p>
            <p class="okedua">WA. +62 878 8880 5854</p>
            <p>E. marketingdhc01@gmail.com</p>
            <p>W. www.diarahotel.id</p>
        </div>
    </section>
<?php include 'components/footer.php';?>
</body>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: 'Montserrat'
        background-image: url('assets/bg.jpg'); /* Sesuaikan dengan gambar Anda */
        background-size: cover;
        background-position: center;
        height: 600px;
    }

    .contact{
        height: 400px;
        
    }

    .satu {
        color: #fff;
        font-family: Arial, sans-serif;
        margin-left: 60px;
        font-size: 25px;
    }

    .judulsatu {
        color: #fff;
        font-weight: bold;
        font-family: Arial, sans-serif;
        margin-left: 60px;
        font-size: 20px;
    }

    .garis {
        width: 30%;
        height: 2px;
        background-color: #fff;
        border: none;
        margin-left: 60px;
        font-size: 15px;
    }
      
    .para {
        color: #fff;
        font-family: arial, sans-serif;
        font-size: 17px;
        margin-left: 60px;
      
    }
      
    .parasatu {
        color: #fff;
        font-family: arial, sans-serif;
        margin-left: 60px;
        font-size: 17px;
    }
      
    .paradua {
        color: #fff;
        font-family: arial, sans-serif;
        margin-left: 60px;
        font-size: 17px;
    }

    .gabungandua {
        color: #fff;
        font-size: 80px;
        font-family: arial, sans-serif;
        margin-left: 50px;
        font-size: 17px;
        position: absolute; /* Aktifkan positioning absolut */
        bottom: 100px; /* Posisikan di tengah vertikal */
        transform: translateY(-50%); /* Geser ke atas sejauh setengah dari tinggi elemen sendiri */
        left: 10px;
    }
</style>
</html>