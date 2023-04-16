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

        </div>
    </div>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


    header {
        font-family: 'Poppins', sans-serif;
    }

    .flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 18px 40px;
        position: relative;
    }

    .sec1 {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0px;
        gap: 40px;
    }

    nav {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 0px;
        gap: 25px;
    }

    nav a {
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #784A14;
        text-decoration: none;
    }
</style>