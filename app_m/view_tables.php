<!DOCTYPE html>
<html>
<head>
    <title>Table Reservations</title>
</head>
<body>
    <h1>Table Reservations</h1>
    <?php
    // Include config file
    require_once "config2.php";

    // SQL to select booked tables
    $sql = "SELECT table_number FROM reservations";

    // Execute query
    $result = $conn->query($sql);

    // Create array of booked tables
    $booked_tables = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($booked_tables, $row["table_number"]);
        }
    }

    // Display tables as buttons
    for ($i = 1; $i <= 6; $i++) {
        if (in_array($i, $booked_tables)) {
            // Table is booked
            echo '<button style="background-color:red;" disabled>Table ' . $i . ' (Booked)</button>';
        } else {
            // Table is available
            echo '<a href="book_table.php?table_number=' . $i . '"><button style="background-color:green;">Table ' . $i . ' (Available)</button></a>';
        }
        echo '&nbsp&nbsp';
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
