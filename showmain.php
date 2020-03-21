<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body>
    <link rel="stylesheet" href="assets/bootstrap-4.4.1-dist/js/bootstrap.js">

<div class="container">
  <h2>Hi!</h2>
  <p>The Tables Contains All Data:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
    <th bgcolor="khaki">NIK</th>
    <th bgcolor="khaki">Nama</th>
    <th bgcolor="khaki">TTL</th>
    <th bgcolor="khaki">Kota</th>
    <th bgcolor="khaki">Password</th>
    </tr>
    </thead>
    
     <?php 
include "connect.php";
$query="SELECT * FROM data_penduduk";
$sql= mysqli_query($connect,$query);

while($data=mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['NIK']."</td>";
    echo "<td>".$data['Nama']."</td>";
    echo "<td>".$data['TTL']."</td>";
    echo "<td>".$data['Kota']."</td>";
    echo "<td>".$data['Password']."</td>";
    echo "</tr>";
}
?>
  </table>
</div>

</body>
</html>
