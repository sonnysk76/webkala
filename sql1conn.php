<!doctype html>
<html>
<head>
<title>SQL</title>
<body>
<?php
$servername = "192.168.43.1:3306";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  else {
    echo "conexion exitosa";
  }
  
$sql = "SELECT texto FROM ecommerce.textos WHERE clave = \"NE\"";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) = true) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["texto"];
    }
} else {
    echo "0 results";
}
 
  
  mysqli_close($conn);
?>
</body>
  </html>