<?php

session_start();

?>
<div class="header">
<header >
    <div class="flex">
        <div class="sec1">
            <img src="img/SAHARA.svg" alt="">
            <nav class="navbar">
                <a href="menu.php">Home</a>
                <a href="menumenu.php">Menu</a>
                <a href="#">My order</a>
                <a href="view_tables.php">View table</a>
            </nav>
        </div>
        <div class="sec2">
            <nav>
                <a href="cart.php">
                    <i class="fas fa-cart-shopping" style="align-items: center;"></i>
                </a>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="#" class="profile">
                            <i class="fas fa-user"></i>
                            <h1>
                                <?php echo $_SESSION['fname']; ?>
                            </h1>
                        </a>

                        <div id="myDropdown" class="dropdown-content">
                            <a href="logout.php">Logout</a>
                        </div>

                    </button>
                </div>
            </nav>
        </div>

</header>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 99;
        font-family: 'Poppins', sans-serif;
        width: 100vw;
        background-color: #D9DBD6;
    }

    .header {
        margin-bottom: 9rem;
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

    .dropbtn {
        background-color: transparent;
        border: none;
    }

    .dropdown {
        position: relative;
        display: list-item;
        list-style: none;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #F5F5F0;
        min-width: 8.5rem;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 1rem;
    }

    .dropdown-content a {
        color: #784A14;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:focus-within .dropdown-content {
        display: block;
    }
</style>

<script>
    // ค้นหาปุ่ม dropdown
    const dropdown = document.querySelector('.dropdown');

    // เมื่อคลิกที่ปุ่ม dropdown ให้เปิดหรือปิด dropdown
    dropdown.addEventListener('click', function () {
        this.classList.toggle('active');
    });

</script>