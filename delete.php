 <?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `products` WHERE id = $id ";

mysqli_query($con, $q);

header('location:viewall.php');

?>