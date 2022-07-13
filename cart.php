<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>YourKart</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <?php
    session_start();
    include 'navbar.php'
    ?>
    <!--  -->

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="">
                    <div class="p-0">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted"><?php if((isset($_SESSION['cart']) && !empty($_SESSION['cart']))) count($_SESSION['cart']) ?> items</h6>
                                    </div>
                                    <hr class="my-4">
                                    <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                                        if((isset($_SESSION['cart']) && !empty($_SESSION['cart']))){
                                        foreach ($_SESSION['cart'] as $k => $v)
                                            echo '<div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="pictures/' . $v['image'] . '" class="img-fluid rounded-3" alt="">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-black mb-0">' . $v['title'] . '</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <h6 class="text-black mb-0">' . $v['quantity'] . '</h6>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">' . $v['price'] . 'Rs.</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                    <hr class="my-4">';
                                    } }?>

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="/e-com" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>