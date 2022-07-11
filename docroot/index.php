<?php include 'connect.php'; ?>

<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styles.css">
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

  <div class="add-fund">

    <form action="fund-log.php" method="post">

      <h1 class="title">ANDALUCIA</h1>

      <div class="row row-date">
        <div class="label">Date:</div>
        <input type="date" name="date">
      </div>

      <?php
      $sql = "SELECT id, type FROM `types`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
      <div class="row row-type">
        <div class="label">Type:</div>
        <select name="type">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>">
              <?php echo $row['type']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <?php } ?>

      <div class="row row-amount">
        <div class="label">Amount:</div>
        <input type="text" name="amount">
      </div>

      <?php
      $sql = "SELECT id, buyer FROM `buyers`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
      <div class="row row-buyer">
        <div class="label">Buyer:</div>
        <select name="buyer">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>">
              <?php echo $row['buyer']; ?>
            </option>
          <?php } ?>
        </select>
        </div>
      <?php } ?>

      <?php
      $sql = "SELECT id, merchant FROM `merchants`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
      <div class="row row-merchant">
        <div class="label">Merchant:</div>
        <select name="merchant">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>">
              <?php echo $row['merchant']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <?php } ?>

      <?php
      $sql = "SELECT id, mode FROM `modes`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
      <div class="row row-mode">
        <div class="label">Mode:</div>
        <select name="mode">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']; ?>">
              <?php echo $row['mode']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <?php } ?>

      <div class="row-submit">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</div>

</body>
</html>
