<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reservations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {

            background-color: #f8f9fa;

            font-family: Arial, sans-serif;

        }

        .navbar {

            background-color: #28a745;

        }

        .navbar-brand {

            color: white;

            font-weight: bold;

        }

        .container-fluid {

            padding: 10px;

        }

        .btn-success {

            background-color: #28a745;

            border-color: #28a745;

        }

        .table {

            background-color: #ffffff;

            border-radius: 10px;

            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

        }

        th,
        td {

            vertical-align: middle !important;

        }

        th {

            background-color: #343a40;

            color: #ffffff;

            font-weight: bold;

        }

        td {

            background-color: #f8f9fa;

            color: #495057;

        }
    </style>

</head>

<body>

    <nav class="navbar shadow">

        <div class="container-fluid">

            <span class="navbar-brand mb-0 h1 text-white">Reservations</span>

        </div>

    </nav>

    <div class="container mt-5">

        <h1 class="mb-4">Reservations</h1>

        <div class="row justify-content-center">

            <div class="col-12">

                <?php

                $servername = "localhost";

                $username = "root";

                $password = "";

                $dbname = "hotel_reservations";



                // Create connection

                $conn = new mysqli($servername, $username, $password, $dbname);



                // Check connection

                if ($conn->connect_error) {

                    die("Connection failed: " . $conn->connect_error);

                }



                // Add total_price column if it doesn't exist

                $add_column_sql = "ALTER TABLE reservations ADD COLUMN IF NOT EXISTS total_price INT";
                $conn->query($add_column_sql);



                // Update total_price values

                $update_sql = "UPDATE reservations SET 

                    total_price = (DATEDIFF(check_out_date, check_in_date) * CASE 

                        WHEN room_type = 'Kamar Deluxe' THEN 1250000 

                        WHEN room_type = 'Executive Suite' THEN 3300000 

                        WHEN room_type = 'Junior Suite' THEN 2300000 

                        WHEN room_type = 'Kamar Club' THEN 1650000 

                        WHEN room_type = 'Presidential Suite' THEN 10000000 

                        WHEN room_type = 'Premiere Twin' THEN 2300000 

                        ELSE 0 

                    END)";
                $conn->query($update_sql);



                // Fetch and display reservations

                $sql = "SELECT *, 

                        DATEDIFF(check_out_date, check_in_date) AS nights, 

                        total_price 

                        FROM reservations";

                $result = $conn->query($sql);



                if ($result->num_rows > 0) {

                    echo "<table class='table table-striped table-bordered'>

                            <thead>

                                <tr>

                                    <th>Room Type</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Check-in Date</th>

                                    <th>Check-out Date</th>

                                    <th>Total Price</th>

                                    <th>Created At</th>
                                    <th>Hapus</th>
                                    <th>Edit</th>

                                </tr>

                            </thead>

                            <tbody>";

                    while($row = $result->fetch_assoc()) {

                        echo "<tr>

                                <td>" . $row["room_type"]. "</td>

                                <td>" . $row["user_name"]. "</td>

                                <td>" . $row["user_email"]. "</td>

                                <td>" . $row["check_in_date"]. "</td>

                                <td>" . $row["check_out_date"]. "</td>

                                <td>IDR " . number_format($row["total_price"], 0, ',', '.') . "</td>

                                <td>" . $row["created_at"]. "</td>
                                <td>Hapus</td>
                                <td>Edit</td>

                              </tr>";

                    }

                    echo "</tbody></table>";

                } else {

                    echo "0 results";

                }



                $conn->close();

                ?>

            </div>

        </div>

    </div>

</body>

</html>