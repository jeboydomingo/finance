<html>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div id="wrapper" class="add-fund">

  <form action="fund-log.php" method="post">

    <h1 class="title">Add fund</h1>

    <div class="row row-date">
      <div class="label">Date:</div>
      <input type="date" name="date">
    </div>

    <div class="row row-type">
      <div class="label">Type:</div>
      <input type="text" name="type">
    </div>

    <div class="row row-amount">
      <div class="label">Amount:</div>
      <input type="text" name="amount">
    </div>

    <div class="row row-buyer">
      <div class="label">Buyer:</div>
      <input type="text" name="name">
    </div>

    <div class="row row-merchant">
      <div class="label">Merchant:</div>
      <input type="text" name="merchant">
    </div>

    <div class="row row-mode">
      <div class="label">Mode:</div>
      <input type="text" name="mode">
    </div>

    <div class="row-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
