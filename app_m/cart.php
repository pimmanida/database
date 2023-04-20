<?php

@include 'config.php';

if (isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
    if ($update_quantity_query) {
        header('location:cart.php');
    }
    ;
}
;

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
    header('location:cart.php');
}
;

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart`");
    header('location:cart.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cartstyle.css">
    <title>Cast</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container1">
        <h1>SAHARA</h1>
        <hr style="width: 60rem; border: 1px solid #000000;">
        <h2>SHOPPING CART</h2>

        <?php

        $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
        $grand_total = 0;
        if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                ?>
                <div class="box1">
                    <div class="subbox1">
                        <div class="img">
                            <img src="imgs/veg1.jpeg">
                        </div>
                        <div class="box2">
                            <h3>
                                <?php echo $fetch_cart['name']; ?>
                            </h3>
                            <h2>
                                <?php echo number_format($fetch_cart['price']); ?> THB
                            </h2>
                            <form action="" method="post">
                                <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                                <input class="quantity" type="number" name="update_quantity" min="1"
                                    value="<?php echo $fetch_cart['quantity']; ?>">
                                <input class="submit" type="submit" value="update" name="update_update_btn">
                            </form>
                        </div>
                    </div>
                    <div class="box3">
                        <h2>
                            <?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?> THB
                        </h2>
                        <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="remove-btn"> <i class="fas fa-trash"></i> remove</a>
                    </div>
                </div>
                <?php
                $grand_total += $sub_total;
            }
            
        }
        
        ?>




        <div class="container2">
            <div class="box4">
                <a href="menumenu.php" class="button">continue shopping</a>
                <h6 style="width:fit-content">&emsp;Total &nbsp;: <?php echo $grand_total; ?> THB</h6>
                <a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="button"> <i class="fas fa-trash"></i> delete all </a>
            </div>
        </div>
    </div>




    <div class="container3">
        <div class="box5">
            
            <button class="button">order checkout</button>

        </div>
    </div>

</body>

</html>