<?php

    include_once '../../controller/dashboard/product.php';

    try {
        if ($_GET['id']) {
            $id = $_GET['id'];
    
            $product = new product();
    
            $product->removeProduct($id);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>