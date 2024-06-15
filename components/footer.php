<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <h1 class="footerlogo">Hotel E-Link</h1>

        <a class="pindahsatu">
          <p>Hotel E-Link, Westminster, London SW1A 0AA England</p>
          <p>Westminster, London, UK</p>
          <p>hotele-link@gmail.com</p>
        </a>

        <div class="footerpict">
            <a href="#"><img src="assets/WA.png" class="fp1"></a>
            <a href="#"><img src="assets/IG.png" class="fp2"></a> 
        </div>
        <p class="tulisanakhir">© 2023 by Diara Hotel</p>
    </footer>
</body>
<style>
    footer {
        background-color: #C42B40;
        position: relative;
        bottom: 0;
        width: 100%;
        text-align: left;
        height: 150px;
        display: block;
    }

    .footerlogo {
        float: right;
        margin-top: 55px;
        margin-right: 70px;
        color: #fff;
    }

    .footerpict{
        float: left;
        margin-left: 45px;
        margin-top: 20px;
    }

    .footerpict img{
        margin: 20px;
    }

    .tulisanakhir {
        color: white;
        margin-left: 50px; 
        width: fit-content;
    }

    .pindahsatu {
        color: white;
        margin-top: -10px;
        position: absolute;
        text-align: center;
        top: 30px; /* Menaikkan tulisan ke atas di dalam footer */
        left: 50%; /* Pusatkan tulisan secara horizontal */
        transform: translateX(-50%);
    }
</style>
</html>


