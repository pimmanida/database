<?php

session_start();

?>

<header class="header">
    <div class="flex">
        <div class="sec1">
            <img src="img/SAHARA.svg" alt="">
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">Menu</a>
                <a href="#">My order</a>
            </nav>
        </div>
        <div class="sec2">
            <nav>
                <a href="#">
                    <i class="fas fa-cart-shopping" style="align-items: center;"></i>
                </a>
                <a href="#" class="profile">
                    <i class="fas fa-user"></i>
                    <h1>
                        <?php echo $_SESSION['fname']; ?>
                    </h1>
                </a>
            </nav>
        </div>
    </div>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


    header {
        font-family: 'Poppins', sans-serif;
        width: 100vw;
    }

    .sec2 i {
        align-items: center;
    }

    .flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 1.125rem 2.5rem;
    }

    .sec1 {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px;
        gap: 2.5rem;
    }

    nav {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px;
        gap: 1.6rem;
    }

    nav a,
    h1 {
        font-style: normal;
        font-weight: 400;
        font-size: 0.875rem;
        line-height: 1.313rem;
        color: #784A14;
        padding: 0.25rem 0.5rem;
        text-decoration: none;
        transition: all 0.3s;
        background: transparent;
    }

    nav a:hover {
        background: rgba(170, 127, 90, 0.25);
        border-radius: 0.5rem;
    }

    nav a i {
        background: transparent;
    }

    .profile {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        align-items: center;
    }

    .profile h1 {
        vertical-align: middle;
    }
</style>
<?php

?>