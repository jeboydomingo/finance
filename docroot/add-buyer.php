<?php include 'connect.php'; ?>

<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="menu-add-styles.css">
</head>
<body>

<div class="page-wrapper">

  <div class="sidebar">
    <ul class="menu">
      <li class="menu-item"><a href="/">Add Entry</a></li>
      <li class="menu-item"><a href="add-type.php">Add Type</a></li>
      <li class="menu-item"><a href="add-buyer.php">Add Buyer</a></li>
      <li class="menu-item"><a href="add-merchant.php">Add Merchant</a></li>
      <li class="menu-item"><a href="add-mode.php">Add Mode</a></li>
    </ul>
  </div>

  <form action="add-buyer.php" method="post" name="add-buyer">

    <h1 class="title">ADD BUYER</h1>

    <div class="row row-add-buyer">
      <input type="text" name="add-buyer">
    </div>

    <div class="row-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
