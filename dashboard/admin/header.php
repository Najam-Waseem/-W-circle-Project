<?php

    try {
        if (!defined('DevEx')) {
          die('<script>window.location.href="dashboard.php"</script>');
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="../../index.php"><img src="../../images/logo.png" class="mr-2" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../images/favicon.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="../../images/avatar.png" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="../../logout.php">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>

  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="icon-clipboard menu-icon"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="category.php">Add & View</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-box menu-icon"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="product.php"> Add & View </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="icon-paper-clip menu-icon"></i>
            <span class="menu-title">Orders</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="order.php">Detail</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>