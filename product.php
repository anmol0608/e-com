<?php
include "db.php";
if (isset($_POST["getProduct"])) {
    $product_query = "SELECT * FROM products";
    $run_query = mysqli_query($con, $product_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id    = $row['id'];
            $pro_title = $row['title'];
            $pro_price = $row['price'];
            $pro_image = $row['image'];
            echo '
                            <div class="col mb-5">
                            <div class="card h-100">
                                <img class="card-img-top" src="pictures/'. $pro_image .'" alt="..." />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder">' . $pro_title . '</h5>
                                        ' . $pro_price . '
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto atc" data-id="'. $pro_id .'" href="javascript:void(0);">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                ';
        }
    }
}
