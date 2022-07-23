<?php

include_once ('config.php');
$id = $_GET['id'];


//Define the query
$hapus = "DELETE FROM beverages WHERE id=$id LIMIT 1";
$hasil = mysqli_query($connection, $hapus);

//sends to page
echo "<script>window.location.href='minuman.php'</script>";

?>