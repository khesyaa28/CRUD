<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.css">
  
</head>
<body>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/js/bootstrap.js">

    <?php 
    include './connect.php';
    $NIK = $_GET['NIK'];
    $query = "SELECT * FROM data_penduduk WHERE NIK ='$NIK'";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <h2>Update Form</h2>
        <form action="update.php" method="POST">
          <div class="form-group">
            <label for="NIK">NIK :</label>
            <input type="text" class="form-control" name="NIK" id="NIK" value="<?php echo $row['NIK'];?>">
          </div>
         
          <div class="form-group">
            <label for="Nama">Nama :</label>
            <input type="text" class="form-control" id="Nama" placeholder="Enter Name" name="Nama">
          </div>
          <div class="form-group">
            <label for="TTL">TTL :</label>
            <input type="text" class="form-control" name="TTL" id="TTL" value="<?php echo $row['TTL'];?>">
          
          </div>
           <div class="form-group">
            <label for="Kota">Kota :</label>
            <input type="text" class="form-control" id="Nama" placeholder="Enter City" name="Kota">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="Password" placeholder="Enter Password" name="Password">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
      </div>
      
</body>
</html>
