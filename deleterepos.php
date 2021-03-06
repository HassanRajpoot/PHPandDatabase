<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Grocery store</title>
  </head>
  <body>
  <div class="dropmenu-bar">
    <ul>
        <li ><a href="home.php">Profit/loss</a>
        </li>
        <li > <a href="news.asp">ITEM</a>
            <div class="submenu-1">
                <ul>
                    <li><a href="additem.php">ADD ITEM</a></li>
                </ul>
            </div>
        </li>
        <li><a href="bill.php">BILL HISROY</a></li>
        <li class="active"><a href="repository.php">REPOSITORY</a></li>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Print</button>
      </ul>
    </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $P_id = $_POST['P_id'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $database = "GROCERY_STORE_MANAGEMENT";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }
    $sql = "DELETE FROM `stock` WHERE `stock_id` = '$P_id'";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "<br>Number of affected rows: $aff <br>";
    
    if($result){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Delete successfully
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>';
    }
    else{
        $err = mysqli_error($conn);
        echo "Not Delete successfully due to this error --> $err";
    }

    }

    
?>

<div class="container mt-3">
<h1>Delete stock</h1>
    <form action="deleterepos.php" method="post">
    <div class="form-group">
        <label for="P_id">id</label>
        <input type="text" name="P_id" class="form-control" id="P_id" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
