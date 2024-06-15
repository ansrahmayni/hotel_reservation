<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Reservations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <div class="container">
        <h1>Reservations</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Room</th>
                    <th>Price</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'config/database.php';
                $result = $conn->query("SELECT reservasi.*, ruangan.room_number, ruangan.price FROM reservasi JOIN ruangan ON reservasi.room_id = ruangan.id");
                while($row = $result->fetch_assoc()) {
                    $check_in = new DateTime($row['check_in']);
                    $check_out = new DateTime($row['check_out']);
                    $interval = $check_in->diff($check_out);
                    $days = $interval->days;
                    $total = $days * $row['price'];

                    echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['room_number']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['check_in']}</td>
                            <td>{$row['check_out']}</td>
                            <td>$total</td>
                            <td>
                                <a href='update.php?id={$row['id']}'>Update</a> | 
                                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<style>
    .container {
    width: 80%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(156, 17, 36, 1);
    border-radius: 10px;
    }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    table th {
        background-color: #9C1124;
    }

    table tr:nth-child(even) {
    background-color: #708090;
    }

    table a{
        text-decoration: none;
        color: #9C1124;
        font-weight: bold;
    }

    table a:hover{
        color: #000;
    }
</style>
</html>
