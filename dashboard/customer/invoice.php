<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>DevEx | Customer Dashboard</title>
      <link rel="shortcut icon" href="../../images/favicon.png" />
      <!--- Bootstrap --->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
   </head>
   <body>
      <div class="container" id="tab">
         <div class="row">
            <div class="col-md-12">
               <?php
                  include_once '../../database/crudDashboard.php';

                  try {
                     if (isset($_GET['invoice_CO'])) {
                        $id = $_GET['invoice_CO'];
               
                        $invoice = new crudOperation();

                        $selectQuery1 = $invoice->selectOrderDetail('order_detail', $id);
                  
                        while ($row1 = mysqli_fetch_assoc($selectQuery1)) {

               ?>
                           <br>

                           <p><strong>Bill no. CO-<?php echo str_pad($id, "8", "0", STR_PAD_LEFT);?></strong></p>

                           <br>

                           <h4 class="card-title">Customer Detail</h4>

                           <br>

                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p>Customer Name: <?php echo $row1['c_name']?></p>
                                    <p>Phone Number: <?php echo $row1['p_number']?></p>
                                    <p>City: <?php echo $row1['city']?></p>
                                 </div>
                                 <div class="col-md-6">
                                    <p>Post Code: <?php echo $row1['p_code']?></p>
                                    <p>Address: <?php echo $row1['c_address']?></p>
                                    <p>Date & time: <?php echo $row1['date']?> </p>
                                 </div>
                              </div>
                           </div>

                           <table class="table table-striped">
                              <thead>
                                    <tr>
                                       <th>PRODUCT</th>
                                       <th>NAME</th>
                                       <th>PRICE</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                    </tr>
                              </thead>
                              <tbody>

               <?php
                           $selectQuery2 = $invoice->selectOrder('c_order', $id);

                           while ($row2 = mysqli_fetch_assoc($selectQuery2)) {
                              echo '
                                 <tr>
                                    <td><img src="../../images/product/'.$row2['image'].'" alt="Product Image" style="width: 12%;"></td>
                                    <td>'.$row2 ['p_name'].'</td>
                                    <td>'.$row2 ['price'].'</td>
                                    <td>'.$row2 ['qty'].'</td>
                                    <td>'.$row2 ['total'].'</td>
                                 </tr>
                              ';
                           }
               ?>

                              </tbody>
                           </table>
                           <br><br>

                           <div class="col-md-12 d-flex flex-column">
                              <div class="row align-self-end">
                                 <div class="col-md-12">
                                    <p>Total Products: <?php echo $row1['total_p']?></p>
                                    <p>Payment Method: <?php echo $row1['p_method']?></p>
                                    <p>Total Amount: <?php echo $row1['cart_t']?></p>
                                 </div>
                              </div>
                           </div>
               <?php
                        }
                     }
                  } catch (\Throwable $th) {
                     echo '<script>alert("Some thing went wrong!!!");</script>';
                  }
               ?>

               <br><br><br><br>

               <a href="#" onclick="javascript:window.history.back(-1);return false;" class="btn btn-info btn-lg btn-block">Back to dashboard</a>

               <br><br>

            </div>
         </div>
      </div>
   </body>
</html>