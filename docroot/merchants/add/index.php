<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/add.css">
  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-merchant">
      <form class="form-add-merchant" action="/merchants" method="GET" name="add-merchant">
        <h1 class="title">ADD MERCHANT</h1>

        <div class="row row-add-merchant">
          <input type="text" name="merchant">
        </div>

        <div class="row-submit">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
