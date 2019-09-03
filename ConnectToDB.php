<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body {
    background-color: #FA54F5;
    background-image: linear-gradient(62deg, #FA54F5 0%, #FDC3FD 100%);

  }
</style>

<body>

  <div>
    <div id="menu-content">
      <!-- Navigation -->
      <label id="collapse" for="_1">
        <img id="menuphoto" src="images/menu.svg">
      </label>
      <input id="_1" type="checkbox" name="mycheckbox" />
      <ul id="mainmenu">

        <li class="submenu">
          <a href="ConnectToDB.php" title="Store">View Database</a>
        </li>
        <li class="submenu">
          <a href="InsertData.php" title="Insert">Insert</a>
        </li>
        <li class="submenu" id="logoset">
          <a href="index.php">
            <img id="logo" src="images/Sneaker_logo.svg" /> <br />
            <img id="sneaker" src="images/logo_name.png" />
          </a>
        </li>
        <li class="submenu">
          <a href="UpdateData.php" title="Update">Update</a>
        </li>
        <li class="submenu">
          <a href="DeleteData.php" title="Delete">Delete</a>
        </li>
      </ul>
    </div>
  </div>
  <?php
  if (empty(getenv("DATABASE_URL"))) {
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
  } else {
    echo getenv("dbname");
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
      "host=ec2-54-225-72-238.compute-1.amazonaws.com;port=5432;user=rxtdhfqtpxrhhs;password=6f6584dbda6217790c95fefe913f8c1697b8d1467b37b8c44a1ccfb62b66d7cf;dbname=d5dfoim75pqir4",
      $db["host"],
      $db["port"],
      $db["user"],
      $db["pass"],
      ltrim($db["path"], "/")
    ));
  }

  $sql = "SELECT * FROM sneakertoy ORDER BY toyid";
  $stmt = $pdo->prepare($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  $resultSet = $stmt->fetchAll();
  ?>

  <div class="w3-responsive w3-container">
    <table class="w3-table w3-bordered w3-border w3-hoverable" border="1">
      <thead>
        <tr>
          <th>Store ID</th>
          <th>Accountant</th>
          <th>Revenue</th>
          <th>Last Time Check</th>
        </tr>
      </thead>
      <tbody>

        <?php
        foreach ($resultSet as $row) {
          ?>

          <tr>
            <td scope="row"><?php echo $row['toyid'] ?></td>
            <td><?php echo $row['tname'] ?></td>
            <td><?php echo $row['unitprice'] ?></td>
            <td><?php echo $row['checkdate'] ?></td>
          </tr>

        <?php
      }
      ?>
      </tbody>
    </table>
  </div>

</body>

</html>