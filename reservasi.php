<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
<?php include 'components/header.php'; ?>

    <div class="container">
        <h1>Reservasi Hotel</h1>
        <form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>                  

            <label for="room">Room:</label>
            <select id="room" name="room_id" required>
                <?php
                require 'config/database.php';
                $result = $conn->query("SELECT * FROM ruangan");
                while($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['type']}</option>";
                }
                ?>
            </select>

            <label for="check_in">Check-In Date:</label>
            <input type="date" id="check_in" name="check_in" required>

            <label for="check_out">Check-Out Date:</label>
            <input type="date" id="check_out" name="check_out" required> 
            
            <button type="submit">Reserve</button>
        </form>
    </div>


</body>
<style>
    body {
    font-family: 'Montserrat';
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        overflow: hidden;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
        color: #9C1124;
    }

    form {
        margin: 20px 40px;
    }

    form label {
        display: block;
        margin: 10px 0 5px;
    }

    form input, form select, form button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form button {
        background-color: #9C1124;
        color: #fff;
        cursor: pointer;
    }

    form button:hover {
        background-color: #fff;
        color: #000;
    }
</style>
</html>