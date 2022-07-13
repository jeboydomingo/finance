<?php include 'connect.php'; ?>

<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="success-styles.css">
</head>
<body>

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
        <th>ID</th>
        <th>Type</th>
      </tr>

    <?php
      // Get data.
      $sql = "SELECT id, type FROM types";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>

    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["type"]; ?></td>
    </tr>

    <?php
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
