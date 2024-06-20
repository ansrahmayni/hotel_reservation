<?php $base_url = '/hotel_reservation'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business & Family Hotel</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
<?php include 'components/header.php'; ?>

    <section class="home" id="home"> 
        <h1>Modern.<br> Comfortable.<br> Affordable.</h1>
    </section>

    <section class="rooms" id="rooms">
        <div class="container">
            <div class="card">
                <a href="<?= $base_url ?>/superior.php">
                    <img src="assets/superior.png" alt="Superior Room">
                </a>
                <h3>Superior Room</h3>
                <p>Untuk anda yang menginginkan kamar ringkas tapi tetap nyaman beristirahat.</p>
            </div>
            <div class="card">
                <a href="<?= $base_url ?>/deluxe.php">
                    <img src="assets/deluxe.png" alt="Deluxe Room">
                </a>
                <h3>Deluxe Room</h3>
                <p>Ekstra ruang untuk anda yang membutuhkan kenyamanan lebih.</p>
            </div>
            <div class="card">
                <a href="<?= $base_url ?>/suite.php">
                    <img src="assets/suite.png" alt="Suite Room">
                </a>
                <h3>Suite Room</h3>
                <p>Beristirahat juga bekerja dalam satu tempat. Selalu menjaga produktifitas anda.</p>
            </div>
            <div class="card">
                <a href="<?= $base_url ?>/executive.php">
                    <img src="assets/executive.png" alt="Executive Suite">
                </a>
                <h3>Executive Suite</h3>
                <p>Untuk anda eksekutif yang membutuhkan ruang luas dan efisiensi dalam bekerja.</p>
            </div>
        </div>
    </section>

</body>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat';
        background-image: url('assets/bakgron.png'); /* Sesuaikan dengan gambar Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 600px;
    }

    .home::before {
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Overlay */
    }

    .home h1 {
        padding-left: 90px;
        padding-bottom: 155px;
        font-size: 250%;   
        color: #fff; 
    }

    /* Container Styles */
    .container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 20px;
        background-color: #fff;
    }

    /* Card Styles */
    .card {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 0;
        width: 22%;
        text-align: center;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ccc;
    }

    .card h3 {
        font-size: 1.5em;
        color: #9C1124;
        margin: 10px 0;
    }

    .card p {
        font-size: 1em;
        color: #333;
        padding: 0 10px 20px;
    }
</style>
</html>

