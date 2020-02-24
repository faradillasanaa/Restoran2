<?php

include './koneksiresto.php';

$query = "SELECT * FROM login";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

?>