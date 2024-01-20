<?php

    try {
        if (!defined('DevEx')) {
          die('<script>window.location.href="../../index.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<!-- partial -->
<div class="main-panel" id="dashboard">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Customer, let's start your day !!!</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Customer Order</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>DATE & TIME</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include_once '../../controller/dashboard/dashboard.php';

                                        try {
                                            if ($_GET['customer']) {
                                                $id = $_GET['customer'];

                                                $dashboard = new dashboard();

                                                $dashboard->showCustomerOrder($id);
                                            }
                                        } catch (\Throwable $th) {
                                            echo '<script>alert("Some thing went wrong!!!");</script>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->