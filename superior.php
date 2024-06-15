<?php $base_url = '/hotel_reservation'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <title>Hotel Room Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

    <div class="room-details">
        <h1>Superior Room</h1>
        <hr><br>
        <p>Twin/Double bed, 21 m-sq room</p>
        <img src="assets/superior.png" alt="Superior Room">
        <div class="facilities">
            <h2>In Room Facilities:</h2>
            <ul>
                <li>Air Conditioning</li>
                <li>High Speed Internet</li>
                <li>24in Smart TV</li>
                <li>Desk and Chair</li>
                <li>Telephone</li>
                <li>Mineral Water</li>
                <li>Hot Water Shower</li>
                <li>Hairdryer</li>
            </ul>
        </div>
        <br>
        <button class="book-now"><a href="<?= $base_url ?>/reservasi.php">Book Now</a></button>
    </div>

    <div class="other-rooms">
        <h2>You might also like</h2>
        <p>Discover other rooms type</p>
        <div class="card-container">
            <div class="card">
                <a href="<?= $base_url ?>/deluxe.php">
                    <img src="assets/deluxe.png" alt="Deluxe Room">
                </a>
                <h3>Deluxe</h3>
            </div>
            <div class="card">
                <a href="<?= $base_url ?>/suite.php">
                    <img src="assets/suite.png" alt="Suite Room">
                </a>
                <h3>Suite</h3>
            </div>
            <div class="card">
                <a href="<?= $base_url ?>/executive.php">
                    <img src="assets/executive.png" alt="Executive Room">
                </a>
                <h3>Executive</h3>
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>
</body>
<style>
    /* General Styles */
    body {
        font-family: 'Montserrat';
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    .room-details {
        background-color: #fff;
        padding: 20px;
        margin: 0 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .room-details h1 {
        font-size: 2em;
        color: #93273D;
        margin-bottom: 2px;
    }

    .room-details hr{
        width: 30%;
        height: 2px;
        border-width: 2px;
        color: #93273D;
        background-color: #93273D;
        float: left;
    }

    .room-details p {
        font-size: 1.3em;
        color: #93273D;
        margin-top: 1px;
    }

    .room-details img {
        width: 40%;
        height: auto;
        float: left;
        border-radius: 10px;
        margin: 20px 20px;
    }

    .facilities {
        text-align: left;
    }

    .facilities h2 {
        font-size: 1.5em;
        margin: 2px 0;
        color: #b22222;
    }

    .facilities ul {
        list-style-type: none;
        padding: 0;
    }

    .facilities ul li {
        margin: 1px 0;
    }

    .book-now {
        background-color: #b22222;
        border: none;
        width: 100%;
        height: 50px;
        font-size: 1.2em;
        cursor: pointer;
        border-radius: 5px;
        margin: 40px 0;
    }

    .book-now a{
        color: #fff;
        text-decoration: none;
    }

    .book-now:hover {
        background-color: #a32020;
    }

    .other-rooms {
        text-align: center;
        padding: 20px;
    }

    .other-rooms h2 {
        font-size: 1.8em;
        color: #b22222;
    }

    .other-rooms p {
        font-size: 1.2em;
        color: #555;
        margin-bottom: 20px;
    }

    .card-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 10px;
        width: 30%;
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
        color: #b22222;
        margin: 10px 0;
    }

    @media (max-width: 768px) {
        .card {
            width: 45%;
        }
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
        }
    }

</style>
</html>
