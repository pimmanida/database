<!DOCTYPE html>
<html>
<head>
    <title>Book Table</title>
</head>
<body>
    <h1>Book Table</h1>
    <?php
    // Include config file
    require_once "config2.php";
    // Check if table number is set
    if (isset($_GET["table_number"])) {
        $table_number = $_GET["table_number"];

        // SQL to insert reservation
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customer = $_POST["customer"];
            $phone_number = $_POST["phone_number"];
            $date_of_reservation = $_POST["date_of_reservation"];
            $time = $_POST["time_of_reservation"];

            $sql = "INSERT INTO reservations (customer, table_number, phone_number, date_of_reservation, time_of_reservation) VALUES ('$customer', '$table_number', '$phone_number', '$date_of_reservation', STR_TO_DATE('', '%H:%i:%s'))";

            if ($conn->query($sql) === TRUE) {
                echo "Reservation confirmed successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close connection
            $conn->close();
        }                                                               
    } else {
        echo "Error: Table number not specified";
    }
    ?>
    <form method="post">
        <label for="customer">Customer Name:</label>
        <input type="text" name="customer" required><br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="tel" name="phone_number" required><br><br>
        <input type="submit" value="Confirm Reservation">
        <label for="date_of_reservation">Date of reservation:</label>
        <input type="date" id="date_of_reservation" name="date_of_reservation" required>
        <label for="time_of_reservation">Time of reservation:</label>
        <input type="time" id="time_of_reservation" name="time_of_reservation" required>
    </form>
</body>
</html>
