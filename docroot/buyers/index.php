<?php include '../components/connect.php'; ?>
<?php include '../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">

  <div class="page-wrapper">
    <?php include '../components/sidebar.php'; ?>

    <?php
      // Check if there is a submitted data.
      if (isset($_GET["buyer"])) {
        // Get submitted data.
        $input = $_GET["buyer"];
        $conn->query("INSERT INTO buyers (buyer)
        VALUES ('$input')");
      }
    ?>

    <div class="buyers-list">
      <div class="buyers-list-inner-wrapper">
        <h1 class="title">BUYERS</h1>

        <table class="table">

        <?php
          // Get data.
          $sql = "SELECT buyer FROM buyers ORDER BY buyer ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row.
            $i = 1;
            while($row = $result->fetch_assoc()) {
        ?>

        <tr>
          <td class="number"><?php echo $i; ?></td>
          <td class="buyers"><?php echo $row["buyer"]; ?></td>
        </tr>

        <?php
              $i++;
            }
          } else {
            echo "0 results";
          }
        ?>
        </table>
      </div>
    </div>

    <?php
    $conn->close();
    ?>
  </div>
</body>
</html>
