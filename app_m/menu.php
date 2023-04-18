<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include 'header.php'; ?>

    

    <div class="logo">
        <br>
        <b>
         <p style="font-size: 3vw;">S A H A R A</p>
        </b>
        <hr width="60%" size="6">
        <br>
    </div>
 

    <div class="container">
      <div class="sidebar" >
        <a href="#" class="sidebar-items">SEAFOOD</a>
        <a href="#" class="sidebar-items">MEAT</a>
        <a href="#" class="sidebar-items">FRUIT</a>
        <a href="#" class="sidebar-items">VEGETABLES</a>
        <a href="#" class="sidebar-items">BAKERY</a>
        <br>
      </div>
</div>


      <div class="big-product-items">
        <a href="#">
          <img class="product-img" src="img/1.png" alt="">
      </a>
      </div>

      <div class="small-product-items2">
          <img class="product-img" src="img/2.png" alt="">
      </div>
      
      <div class="small-product-items3">
          <img class="product-img" src="img/3.png" alt="">
      </div>
  </div> 
  
      

  <div class="menu">
    
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/4.png" alt="">
      </a>
    </div>
    
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/4.png" alt="">
      </a>
    </div>
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/5.png" alt="">
      </a>
    </div>
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/6.png" alt="">
      </a>
    </div>
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/7.png" alt="">
      </a>
    </div>
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/8.png" alt="">
      </a>
    </div>
    <div class="menu-items">
      <a href="#">
        <img class= "menu-img" src="app_m/img/9.png" alt="">
      </a>
    </div>

  </div>
    




    <div class="modal" style="display: none;">
      <div class="modal-bg"></div>
      <div class="modal-page">
        <h2>Detail</h2>
        <br>
        <div class="modaldesc-content">
          <img class="modaldesc-img" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
          <div class="modaldesc-detail">
            <p style="font-size: 1.5vw;">Product name</p>
            <p style="font-size: 1.2vw;">500 THB</p>
            <br>
            <p style="color: #adadad;">Lorem iaudantium harum doloremque alias. Quae, vel ipsum quasi, voluptas, sit optio nemo magni numquam non dicta voluptates porro! Vero eveniet numquam sit aut vel eligendi officiis iste tenetur expedita. Delectus vero quibusdam adipisci in. Esse.</p>
            <br>
            <div class="btn-control">
              <button class="btn">
                Close
              </button>
              <button class="btn btn-buy">
                Add to cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="modal" style="display: none;">
      <div class="modal-bg"></div>
      <div class="modal-page">
        <h2>My cart</h2>
        <br>
        <div class="cartlist">
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
          <div class="cartlist-items">
            <div class="cartlist-left">
              <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
              <div class="cartlist-detail">
                <p style="font-size: 1.5vw;">Product name</p>
                <p style="font-size: 1.2vw;">500 THB</p>
              </div>
            </div>
            <div class="cartlist-right">
              <p class="btnc">-</p>
              <p style="margin: 0 20px;">1</p>
              <p class="btnc">+</p>
            </div>
          </div>
  
        </div>
        <div class="btn-control">
          <button class="btn">
            Cancel
          </button>
          <button class="btn btn-buy">
            Buy
          </button>
        </div>
      </div>
    </div>
  
  </body>
</html>