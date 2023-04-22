<?php

@include 'config.php';

if (isset($_POST['order_btn'])) {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $flat = $_POST['flat'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pin_code = $_POST['pin_code'];

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
    $price_total = 0;
    if (mysqli_num_rows($cart_query) > 0) {
        while ($product_item = mysqli_fetch_assoc($cart_query)) {
            $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
            $product_price = number_format($product_item['price'] * $product_item['quantity']);
            $price_total += $product_price;
        }
        ;
    }
    ;

    $total_product = implode(', ', $product_name);
    $detail_query = mysqli_query($conn, "INSERT INTO `order`(id,name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES(NULL,'$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

    if ($cart_query && $detail_query) {
        echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>" . $total_product . "</span>
            <span class='total'> total : $" . $price_total . "/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>" . $name . "</span> </p>
            <p> your number : <span>" . $number . "</span> </p>
            <p> your email : <span>" . $email . "</span> </p>
            <p> your address : <span>" . $flat . ", " . $street . ", " . $city . ", " . $state . ", " . $country . " - " . $pin_code . "</span> </p>
            <p> your payment mode : <span>" . $method . "</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='menumenu.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="order.css">
    <script src="script.js" defer></script>

</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container1">
        <h1>SAHARA</h1>
        <hr style="width: 60rem; border: 1px solid #000000;">
        <form action="" method="post">
            <div className="total">
                <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart`") or die('pim failed');
                $total = 0;
                $grand_total = 0;
                if (mysqli_num_rows($select_cart) > 0) {
                    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                        $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                        $grand_total = $total += $total_price;
                    }
                } else {
                    echo "<div class='display-order'><span>your cart is empty!</span></div>";
                }
                ?>
                <t class="grand-total"> grand total :
                    <?= $grand_total; ?> THB
                </t>
            </div>


            <div class="col">
                <div class="inp">
                    <u> YOUR NAME </u>
                    <input type="text" name="name" className="i1" placeholder="enter your name" required />
                </div>

                <div class="inp">
                    <u> PHONE NUMBER </u>
                    <input type="number" name="number" className="i2" placeholder="enter your number" required />
                </div>

                <div class="inp">
                    <u> E-MAIL </u>
                    <input type="email" name="email" className="i3" placeholder="enter your email" />
                </div>

                <div class="inp">
                    <u> PAYMENT METHOD </u>

                    <select name="method">
                        <option value="cash on delivery" selected>cash on devlivery</option>
                        <option value="credit cart">credit cart</option>
                        <option value="paypal">paypal</option>
                    </select>

                </div>

                <div class="inp">
                    <u> FLAT NO. </u>
                    <input type="text" name="flat" className="i5" placeholder="e.g. flat no." required />
                </div>

                <div class="inp">
                    <u> STREET </u>
                    <input type="text" name="street" className="i6" placeholder="e.g. street name" required />
                </div>

                <div class="inp">
                    <u> CITY </u>
                    <input type="text" name="city" className="i7" placeholder="e.g. Bangkok" required />
                </div>

                <div class="inp">
                    <u> STATE </u>
                    <input type="text" name="state" className="i8" placeholder="e.g. Phaya Thai" required />
                </div>

                <div class="inp">
                    <u> COUNTRY </u>
                    <input type="text" name="country" className="i9" placeholder="e.g. Thai" required />
                </div>

                <div class="inp">
                    <u> PIN CODE </u>
                    <input type="text" name="pin_code" className="i10" placeholder="e.g. 12345" />
                </div>
            </div><input class="button1" type="submit" value="order now" name="order_btn" style="margin-bottom: 10rem;">

        </form>



    </div>
</body>

</html>