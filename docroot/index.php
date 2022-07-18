<?php include 'components/connect.php'; ?>
<?php include 'components/header.php'; ?>

<body>
  <link rel="stylesheet" type="text/css" href="/css/styles.css">

  <div class="page-wrapper">
    <?php include 'components/sidebar.php'; ?>

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
