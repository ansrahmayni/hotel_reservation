<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM reservasi WHERE id=$id");
    $reservation = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
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

    $sql = "UPDATE reservasi SET name=?, email=?, phone=?, room_id=?, check_in=?, check_out=?, total=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssissii", $name, $email, $phone, $room_id, $check_in, $check_out, $total, $id);

    if ($stmt->execute()) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

$result_rooms = $conn->query("SELECT * FROM ruangan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Update Reservation</h1>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $reservation['id']; ?>">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $reservation['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $reservation['email']; ?>" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $reservation['phone']; ?>" required>

            <label for="room">Room:</label>
            <select id="room" name="room_id" required>
                <?php while($row = $result_rooms->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $reservation['room_id']) echo 'selected'; ?>>
                        <?php echo "{$row['room_number']} - {$row['type']} - \${$row['price']}"; ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <label for="check_in">Check-In Date:</label>
            <input type="date" id="check_in" name="check_in" value="<?php echo $reservation['check_in']; ?>" required>

            <label for="check_out">Check-Out Date:</label>
            <input type="date" id="check_out" name="check_out" value="<?php echo $reservation['check_out']; ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
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
