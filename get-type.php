<?php
$servername = "sql203.byethost7.com";
$username = "b7_16019404";
$password = "123456789";
$database = 'b7_16019404_pos';

$type = htmlspecialchars($_GET["type"]);

$link = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM Products WHERE type = '$type'";
$result = mysqli_query($link, $sql);
$rows = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         $rows[] = $row;
    }
} else {
    echo "no records";
}

print json_encode($rows);

mysqli_close($link);
?>	