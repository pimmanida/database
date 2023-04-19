<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="book_table.css">
    <title>Book Table</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container1">
        <h1>SAHARA</h1>
        <hr style="width: 60rem; fiborder: 1px solid #000000;">
        <div class="sub">
            <p>book table :</p>
            <?php
            // Include config file
            require_once "config2.php";
            // Check if table number is set
            if (isset($_GET["table_number"])) {
                $table_number = $_GET["table_number"]; ?>
                <p> <?php echo "Table number $table_number"; ?></p>
                <?php // SQL to insert reservation                                                      
            } else {
                echo "Error: Table number not specified";
            }
            ?>
        </div>
        
        <form method="post">
            <div class="container2">
                <div class="box">
                    <label for="customer">Customer Name:</label>
                    <input type="text" name="customer" placeholder="Name" required>
                </div>
                <div class="box">
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" name="phone_number" placeholder="Phone Number" required>
                </div>
                <div class="box">
                    <label for="date_of_reservation">Date of reservation:</label>
                    <input type="date" id="date_of_reservation" name="date_of_reservation" required>
                    </div>
                <div class="box">
                    <label for="time_of_reservation">Time of reservation:</label>
                    <input type="time" id="time_of_reservation" name="time_of_reservation" required>
                </div>
            </div>
            <div class="container3">
                <input type="submit" value="Confirm Reservation">
            </div>
            
        </form>
        <?php if (isset($_GET["table_number"])) { ?>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = $_POST["customer"];
                $phone_number = $_POST["phone_number"];
                $date_of_reservation = $_POST["date_of_reservation"];
                $time = $_POST["time_of_reservation"];

                $sql = "INSERT INTO reservations (customer, table_number, phone_number, date_of_reservation, time_of_reservation) VALUES ('$customer', '$table_number', '$phone_number', '$date_of_reservation', STR_TO_DATE('$time', '%H:%i'))";


                if ($conn->query($sql) === TRUE) {
                    echo "Reservation confirmed successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close connection
                $conn->close();
            }                                                               
            } ?>
            <div class="inp">
                <a href="view_tables.php">
                <input type="button" value="view table">
                </a>
            </div>
    </div>
    
</body>
</html>
