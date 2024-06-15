<?php $base_url = '/hotel_reservation'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="navcontainer">
            <a href="/hotel_reservation" class="logo">Hotel E-Link</a>
            <ul class="nav-links">
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li><a href="<?= $base_url ?>/#rooms">Rooms</a></li>
                <li><a href="<?= $base_url ?>/about.php">About</a></li>
                <li><a href="<?= $base_url ?>/contact.php">Contact</a></li>
                <button><a href="<?= $base_url ?>/reservasi.php">Book Now!</a></button>
                
            </ul>
        </div>
    </nav>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
    }

    nav {
        padding: 18px 20px;
        top: 0;
        position: sticky;
        background: linear-gradient(#fff, rgba(255, 255, 255, 0));
        background: -moz-linear-gradient(#fff, rgba(255, 255, 255, 0));
        background: -webkit-linear-gradient(#fff, rgba(255, 255, 255, 0));
    }

    nav .navcontainer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav .logo {
        font-size: 29px;
        font-weight: bold;
        text-decoration: none;
        color: rgba(156, 17, 36, 1);
    }

    nav .nav-links {
        list-style: none;
        padding: 0;
        display: flex;
    }

    nav .nav-links li {
        display: inline;
        margin-left: 20px;
        margin: 0 50px;
    }

    li a {
        color: rgba(156, 17, 36, 1);
        text-decoration: none;
    }

    nav .nav-links a:hover {
        text-decoration: underline;
    }

    button{
        background-color: #9C1124;
        padding: 8px;
        width: 100px;
        border-radius: 10px;
    }
    
    button a{
        text-decoration: none;
        color: #fff;
    }
</style>
</html>