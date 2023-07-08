<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--Font awesome CSS-->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!---Google Font--->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <!---Custom CSS Font--->
  <link rel="stylesheet" href="css/Style.css">
  <title>E-Learing</title>
</head>

<body>
  <!---Start Nevigation-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" alt=" not found" height="80 px" width="100px"></a>
      <span class="navbar-text">Learn and Implement</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav custom-nav pl-5">
          <li class="nav-item custom-nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a href="courses.php" class="nav-link">Courses</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a href="paymentstatus.php" class="nav-link">Payment Status</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a href="#" class="nav-link">My Profile</a>
          </li>
          <li class="nav-item custom-nav-item">
          <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a href="#" class="nav-link">Logout</a>
          </li>

          <li class="nav-item custom-nav-item">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a>
          </li>
          <li class="nav-item custom-nav-item">
            <a href="#" class="nav-link">Feedback</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!---End Nevigation-->