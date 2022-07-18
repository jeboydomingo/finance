<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/form-add.css">

  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-type">
      <form action="list.php" method="post" name="add-type">
        <h1 class="title">ADD TYPE</h1>

        <div class="row row-add-type">
          <input type="text" name="add-type">
        </div>

        <div class="row-submit">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
