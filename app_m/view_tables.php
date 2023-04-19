<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="book_table.css">
    <title>Table Reservations</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container1">
        <h1>SAHARA</h1>
        
        <hr style="width: 60rem; fiborder: 1px solid #000000;">
        <div class="sub">
            <p>view tables</p>
        </div>
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
    ?>
    <div class="container4">
    <?php 
    for ($i = 1; $i <= 6; $i++) {
            // Table is available ?>
            <?php if ($i > 3) { $i--;  ?>
            <div class="container5">
                <?php for ($j=0; $j<=2; $j++) { 
                    if (in_array($i, $booked_tables)) {
                    ?><div class="table">
                    <button disabled>Table <?php echo $i ?> (Booked)</button>
                </div> <?php } else { ?>
                    <div class="table">
                    <a href="book_table.php?table_number=<?php echo $i ?>">
                        <button>Table  <?php echo $i ?>  (Available)</button>
                    </a>
                </div>
                <?php } ?>

                
                <?php $i++; }} else { ?>
                    <div class="container5">
                <?php for ($j=0; $j<=2; $j++) { 
                    
                if (in_array($i, $booked_tables)) {?>
                    <div class="table">
                    <button disabled>Table <?php echo $i ?> (Booked)</button>
                </div> <?php } else { ?>
                    <div class="table">
                    <a href="book_table.php?table_number=<?php echo $i ?>">
                        <button>Table  <?php echo $i ?>  (Available)</button>
                    </a>
                </div>
                <?php }
                 $i++;}} ?>
            </div>
            
        <?php
        }
        echo '&nbsp&nbsp';
    

    // Close connection
    $conn->close();
    ?>
    </div>
</body>
</html>


