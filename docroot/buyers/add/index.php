<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/form-add.css">
  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-type">
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
  </div>
</body>
</html>
