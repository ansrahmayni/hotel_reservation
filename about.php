<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
<?php include 'components/header.php'; ?>

    <section class="about" id="about">
        <div class="kata1">
            <h1>Hadir untuk Bisnis dan Keluarga</h1>
            <hr>
            <br>
            <p>
                Hotel E-Link merupakan hotel bisnis dan keluarga bintang sepuluh yang hadir di London. Sebagai tempat menginap untuk keluarga dan mengadakan pertemuan bisnis, Hotel E-Link menyediakan 60 kamar dan 3 ruang pertemuan yang dapat menampung hingga 120 orang.
            </p>
            <p>
                Hotel E-Link menawarkan fasilitas dan layanan yang prima dan terjaga. Dikelilingi oleh Big Ben dan London Bridge yang berdekatan dengan hotel menjadikan Hotel E-Link London sebagai tempat menginap yang tepat.
            </p>
            <div class="scantext">
                <p class="sc1">Save Contact</p>
                <p class="sc2">Maps</p>
            </div>
            <div class="scan">
                <img src="assets/qr2.png" alt="scan">
                <img src="assets/qr1.png" alt="scan">
            </div>
        </div>
        <div class="aboutpict">
            <div class="about1">
                <img src="assets/diara.png" alt="aboutpict">
            </div>
            <br>
            <div class="about2">
                <img src="assets/bg.png" alt="aboutpict">
            </div>
        </div>
        <br>
        
    </section>

    <section class="facilities" id="facilities">
        <div class="kata2">
            <h1>Facilities</h1>
            <hr>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, tenetur est dolorum aspernatur error reprehenderit perferendis <br> deleniti eum odit alias ad inventore officia officiis velit aperiam dignissimos doloremque, consequuntur laborum!</p>
        </div>

        <div class="facilities1">
            <img src="assets/image 11.png"/>
            <img src="assets/image 12.png" />
            <img src="assets/image 16.png" />
        </div>

        <div class="facilities2">
            <img src="assets/image 13.png" />
            <img src="assets/image 14.png"  />
            <img src="assets/image 15.png"/>
        </div>
    </section>

<?php include 'components/footer.php'; ?>
</body>
<style>
    body{
        font-family: 'Montserrat';
    }
    .about{
        display: flex;
    }

    .kata1{
        color: #93273D;
        margin-left: 60px;
        margin-right: 60px;
    }

    .kata1 hr{
        width: 40%;
        height: 2px;
        border-width: 2px;
        color: #93273D;
        background-color: #93273D;
        float: left;
    }

    .scantext{
        display: flex;
        margin-left: 41px;
    }

    .scantext .sc2{
        margin-left: 110px;
    }

    .scan{
        display: flex;
    }

    .scan img{
        margin: 7px 20px;
        justify-content: space-between;
        width: 160px;
    }

    .aboutpict img{
        
        padding: 0;
        margin-right: 85px;
        margin-left: 20px;
        width: 300px;
    }

    .kata2 {
        color: #93273D;
        text-align: center;
    }

    .kata2 hr{
        width: 20%;
        height: 2px;
        border-width: 2px;
        color: #93273D;
        background-color: #93273D;
    }

    .kata1 p{
        font-size: 20px;
    }

    .facilities{
        margin-bottom: 100px;
    }

    .facilities1{
        display: flex;
        align-items: center;
        padding: 0% 5%;
        margin: 55px 10px;
    }

    .facilities1 img{
        padding: 7px;
        width: 40%;
    }

    .facilities2{
        display: flex;
        align-items: center;
        padding: 0% 5%;
        margin: 0px 10px;
    }

    .facilities2 img{
        padding: 7px;
        width: 40%;
    }
</style>
</html>