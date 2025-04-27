<?php include("db.php"); ?>
<?php include("adminfooditem.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .cname{
        color:antiquewhite;
      }
      </style>
</head>
<body>
<form action="" method="POST">
    <div align="center">
      <p class="style21">Food </p>
      <p class="style2">&nbsp;</p>
      <table width="488" border="1" cellpadding="8" cellspacing="0" bgcolor="#333333">
        <tr>
          <th width="212" class="cname" scope="row">Food Type </th>
          <td width="238"><label>
       <input type="text" name="a1" />
            </label></td>
        </tr>
        <tr>
          <th width="212" class="cname" scope="row">Veg or NonVeg </th>
          <td width="238"><label>
       <input type="text" name="a2" />
            </label></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><label>
              <input type="submit" name="Submit1" value="Submit" />
            </label></td>
        </tr>
      </table>
    </div>
  </form>
  <?php
  if (isset($_POST['Submit1'])) {
    $a1 = $_POST["a1"];
    $a2 = $_POST["a2"];


    $sql = "insert into foodcategory (foodtype,vegornonveg)values('$a1','$a2')";
    if (mysqli_query($conn, $sql)) {
  ?>

      <script>
        alert("Food Type Added");
      </script>

  <?php
    } else {
      echo "Could not insert record:" . mysqli_error($conn);
    }
  }

  ?>   



</body>
</html>