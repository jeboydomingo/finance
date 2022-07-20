<?php include '../components/connect.php'; ?>
<?php include '../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">

  <div class="page-wrapper">
    <?php include '../components/sidebar.php'; ?>

    <?php
      // Check if there is a submitted data.
      if (isset($_GET["type"])) {
        // Get submitted data.
        $input = $_GET["type"];
        $conn->query("INSERT INTO types (type)
        VALUES ('$input')");
      }
    ?>

    <div class="types-list">
      <div class="types-list-inner-wrapper">
        <h1 class="title">TYPES</h1>

        <table class="table">

        <?php
          // Get data.
          $sql = "SELECT type FROM types ORDER BY type ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // Output data of each row.
            $i = 1;
            while($row = $result->fetch_assoc()) {
        ?>

        <tr>
          <td class="number"><?php echo $i; ?></td>
          <td class="types"><?php echo $row["type"]; ?></td>
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
