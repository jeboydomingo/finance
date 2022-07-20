<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/add.css">
  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-type">
      <form class="form-add-type" action="/types" method="GET" name="add-type">
        <h1 class="title">ADD TYPE</h1>

        <div class="row row-add-type">
          <input type="text" name="type">
        </div>

        <div class="row-submit">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
