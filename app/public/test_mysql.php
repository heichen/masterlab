<?php


#print_r($_SERVER);

$mysqli = new mysqli("localhost", "root", '7!$kd12B6goZcs27r3ezRE8cTO', "masterlab_ci");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "Select @@sql_mode";
$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_NUM);
print_r($row);

echo $mysqli->get_server_info();

/* close connection */
$mysqli->close();
?>
