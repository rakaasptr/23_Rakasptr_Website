<?php
// add_process.php

include "database_conn.php";

if(count($_POST) > 0){
    $id = $_POST["id"];
    $item = $_POST["item"];
    $total = $_POST["total"];
    $price = $_POST["price"];

    $query = "INSERT INTO barang (id_barang, nama_barang, total_pesanan, harga_barang) VALUES ('$id','$item', '$total', '$price')";

    if(mysqli_query($db_connect, $query)){
        $message = 1;
    }else{
        $message = 4;
    }
}

header("Location:checkout.php?message=" . $message . "");

?>