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

    <h1 class="title">ANDALUCIA</h1>

    <div class="row row-date">
      <div class="label">Date:</div>
      <input type="date" name="date">
    </div>

    <div class="row row-type">
      <div class="label">Type:</div>
      <select name="type">
        <option value="dr">Gastador</option>
        <option value="cr">Ricarica</option>
      </select>
    </div>

    <div class="row row-amount">
      <div class="label">Amount:</div>
      <input type="text" name="amount">
    </div>

    <div class="row row-buyer">
      <div class="label">Buyer:</div>
      <select name="buyer">
        <option value="jeboy">Jeboy</option>
        <option value="tim">Tim</option>
      </select>
    </div>

    <div class="row row-merchant">
      <div class="label">Merchant:</div>
      <select name="merchant">
        <option value=1>Savemore Acacia Estates</option>
        <option value=2>Bellyrub Acacia Estates</option>
        <option value=3>Brewhilde Acacia Estates</option>
      </select>
    </div>

    <div class="row row-mode">
      <div class="label">Mode:</div>
      <select name="mode">
        <option value=1>Gcash</option>
        <option value=2>Cash</option>
        <option value=3>Card</option>
      </select>
    </div>

    <div class="row-submit">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
