<?php

    include_once '../../controller/dashboard/category.php';

    try {

        if ($_GET['id']) {
            $id = $_GET['id'];
    
            $category = new category();
    
            $category->removeCategory($id);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>