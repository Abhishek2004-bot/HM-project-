<?php include("db.php"); ?>
<?php include("admintab.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.5-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin.css">

</head>

<body>
<div class=" d-flex justify-content-center gap-5 my-3" >
    <form id="form1" name="form1" method="post" action="northvegfood.php">
     <input type="hidden" name="vegetarian" value="vegetarian" />
  
      <button type="submit" name="Submit" class="light-white-btn custom-btn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAgklEQVR4nGNgGAUjDmitCmWzOxDeZn8g/KH9/rBfFGKQGa0gMwlaDFJIBQvRcSthi6njU3T8iBgf/6IFZiDVYoIaqGWO/ajFgyWo7YlMPKMWM4wG9ZBJXMSCUYsZhkxQ29OxWnxIbUvt9oc9GJimz8GwFoIWgxpmUMvp29gbBcMOAABYDOHxMx4bHgAAAABJRU5ErkJggg==" alt="square"> Vegetarian</button>
      
</form>

    <form id="form1" name="form1" method="post" action="northnonvegfood.php">

      <input type="hidden" name="Non_Vegetarian" value="Non vegetarian" />
      <button type="submit" name="Submit" class="light-white-btn custom-btn"><img alt="svgImg" id="vegicon" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyBmaWxsPSIjRkE1MjUyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciICB2aWV3Qm94PSIwIDAgMzAgMzAiIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiPiAgICA8cGF0aCBkPSJNIDcgNCBDIDUuMzQzIDQgNCA1LjM0MyA0IDcgTCA0IDIzIEMgNCAyNC42NTcgNS4zNDMgMjYgNyAyNiBMIDIzIDI2IEMgMjQuNjU3IDI2IDI2IDI0LjY1NyAyNiAyMyBMIDI2IDcgQyAyNiA1LjM0MyAyNC42NTcgNCAyMyA0IEwgNyA0IHogTSA4IDggTCAyMiA4IEwgMjIgMjIgTCA4IDIyIEwgOCA4IHogTSAxMiAxMiBMIDEyIDE4IEwgMTggMTggTCAxOCAxMiBMIDEyIDEyIHoiLz48L3N2Zz4="/> Non Vegetarian</button>
 </form>
  </div>
  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM food where foodtype = 'northindian'";
      $retval = mysqli_query($conn, $sql);


      while ($row = mysqli_fetch_assoc($retval)) {

      ?>
        <div class="col-lg-3 col-md-4 col-sm-8 mb-2 custom-margin">
          <div class="box p-3 text-center">

            <div class="img-box mb-2" style="border-radius:5px; overflow:hidden;">
              <img src="fimages/nor/<?php echo $row['foodimage']; ?>" class="img-fluid" style="height:250px; width:250px; object-fit:cover;" alt="Food Image">
            </div>
            <div class="detail-box">
              <h6><?php echo $row['foodname']; ?></h6>
              <span>₹<?php echo $row['foodprice']; ?></span>
            </div>
            <div class="new"><span></span></div>


          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>


  <script src="bootstrap-5.3.5-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>