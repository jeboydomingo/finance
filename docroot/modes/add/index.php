<?php include '../../components/connect.php'; ?>
<?php include '../../components/header.php'; ?>
<body>
  <link rel="stylesheet" type="text/css" href="/css/components/add.css">
  <div class="page-wrapper">
    <?php include '../../components/sidebar.php'; ?>

    <div class="add-mode">
      <form action="/modes" method="GET" name="add-mode">
        <h1 class="title">ADD MODE</h1>

        <div class="row row-add-mode">
          <input type="text" name="mode">
        </div>

        <div class="row-submit">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
  </body>
  </html>
