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
                    <i class="fas fa-cart-shopping"></i>
                </a>
                <a href="#">
                    <i class="fas fa-user"></i>
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

    .flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 1.125rem 2.5rem;
        position: relative;
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
        align-items: flex-start;
        padding: 0px;
        gap: 1.6rem;
    }

    nav a {
        font-style: normal;
        font-weight: 400;
        font-size: 0.875rem;
        line-height: 1.313rem;
        color: #784A14;
        text-decoration: none;
    }
</style>