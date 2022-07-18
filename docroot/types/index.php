<?php include '../connect.php'; ?>

<body>
  <?include '../components/header.php'; ?>
  <?php include '../components/sidebar.php'; ?>

  <?php
    // Get submitted data.
    $input = $_POST["add-type"];

    $sql = "INSERT INTO types (type)
    VALUES ('$input')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  ?>

  <div class="table">
    <table>
      <tr>
        <th>#</th>
        <th>Type</th>
      </tr>

    <?php
      // Get data.
      $sql = "SELECT type FROM types ORDER BY type ASC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        $i = 1;
        while($row = $result->fetch_assoc()) {
    ?>

    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row["type"]; ?></td>
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

    <button name="home" onclick="location='index.php'">Back to Home</button>
    <button name="another" onclick="location='add-type.php'">Submit Another</button>


  <?php
  $conn->close();
  ?>

</body>
</html>
