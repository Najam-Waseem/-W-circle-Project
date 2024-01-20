<?php

    try {
        define('DevEx', true);
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <!-- head -->
    <?php include_once 'head.php'; ?>
    <!-- End head -->

    <body>
        <?php
            // <!-- Header -->
            include_once 'header.php';
            // <!-- End Header -->

            // <!-- Slider Area -->
            include_once 'body/order.php';
            // <!-- End Slider Area -->

            // <!-- Start Footer Area -->
            include_once 'footer.php';
            // <!-- End Footer Area -->
        ?>
    </body>
</html>