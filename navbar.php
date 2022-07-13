<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/e-com">YourKart</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/e-com">Home</a></li>
            </ul>
            <a href="./cart.php" class="text-decoration-none">
                <button class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                </button>
            </a>
            &nbsp;
            <?php if (!isset($_SESSION['email']) && empty($_SESSION['email'])) { ?>
                <a href="./login.php" class="text-decoration-none">
                    <button class="btn btn-outline-light" type="submit">
                        Login/Register
                    </button>
                </a>
            <?php } else { ?>
                <a href="./logout.php" class="text-decoration-none">
                    <button class="btn btn-outline-light" type="submit">
                        Logout
                    </button>
                </a>
            <?php } ?>
        </div>
    </div>
</nav>