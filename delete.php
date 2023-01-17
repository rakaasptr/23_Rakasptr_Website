<?php

include "database.php"; 
$customer_id = $_GET["id_barang"];

$query = "DELETE FROM barang WHERE id_barang='" . $customer_id . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:index.php?message=" . $message . "");

?>