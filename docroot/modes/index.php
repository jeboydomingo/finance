<?php include '../components/connect.php'; ?>
<?php include '../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">

  <div class="page-wrapper">
    <?php include '../components/sidebar.php'; ?>

    <?php
      // Check if there is a submitted data.
      if (isset($_GET["mode"])) {
        // Get submitted data.
        $input = $_GET["mode"];

        $sql = "INSERT INTO modes (mode)
        VALUES ('$input')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    ?>

    <div class="modes-list">
      <div class="modes-list-inner-wrapper">
        <h1 class="title">MODES</h1>

        <table class="table">

        <?php
          // Get data.
          $sql = "SELECT mode FROM modes ORDER BY mode ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row.
            $i = 1;
            while($row = $result->fetch_assoc()) {
        ?>

        <tr>
          <td class="number"><?php echo $i; ?></td>
          <td class="modes"><?php echo $row["mode"]; ?></td>
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
