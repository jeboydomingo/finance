<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/add.css">
  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-buyer">
      <form action="/buyers" method="GET" name="add-buyer">
        <h1 class="title">ADD BUYER</h1>

        <div class="row row-add-buyer">
          <input type="text" name="buyer">
        </div>

        <div class="row-submit">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
