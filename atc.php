<?php
session_start();
 
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {

    if (!empty($_POST["count"])) {

        require 'db.php';

        $query    = "SELECT * FROM products WHERE id='" . $_POST["id"] . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $title = $row['title'];
            $id = $row['id'];
            $price = $row['price'];
            $image = $row['image'];
            $cartArr = array(
                'title' => $title,
                'id' => $id,
                'price' => $price,
                'quantity' => $_POST["count"],
                'image' => $image
            );

            if (empty($_SESSION["cart"])) {
                $_SESSION["cart"][$id] = $cartArr;
                echo '<div class="card card p-3 m-3 bg-danger text-white"><span>Product added to cart.</span></div>';
            } else {
                $array_keys = array_keys($_SESSION["cart"]);
                if (in_array($id, $array_keys)) {
                    echo '<div class="card card p-3 m-3 bg-danger text-white"><span>Product already exist.</span></div>';
                } else {
                    $_SESSION["cart"][$id] = $cartArr;
                    echo '<div class="card card p-3 m-3 bg-danger text-white"><span>Product added to cart.</span></div>';
                }
            }
        }
    }
}
else {
    echo '<div class="card card p-3 m-3 bg-danger text-white"><span>Please login to your account before adding any product to cart.</span></div>';
}