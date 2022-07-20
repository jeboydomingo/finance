<?php include '../components/connect.php'; ?>
<?php include '../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">

  <div class="page-wrapper">
    <?php include '../components/sidebar.php'; ?>

    <?php
      // Check if there is a submitted data.
      if (isset($_GET["merchant"])) {
        // Get submitted data.
        $input = $_GET["merchant"];

        $sql = "INSERT INTO merchants (merchant)
        VALUES ('$input')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    ?>

    <div class="types-list">
      <div class="types-list-inner-wrapper">
        <h1 class="title">MERCHANTS</h1>

        <table class="table">

        <?php
          // Get data.
          $sql = "SELECT merchant FROM merchants ORDER BY merchant ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row.
            $i = 1;
            while($row = $result->fetch_assoc()) {
        ?>

        <tr>
          <td class="number"><?php echo $i; ?></td>
          <td class="merchants"><?php echo $row["merchant"]; ?></td>
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
