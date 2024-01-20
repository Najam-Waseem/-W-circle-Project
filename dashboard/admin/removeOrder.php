<?php

    include_once '../../controller/dashboard/order.php';

    try {
        if ($_GET['invoice_CO']) {
            $id = $_GET['invoice_CO'];

            $order = new order();
    
            $order->removeOrder($id);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>