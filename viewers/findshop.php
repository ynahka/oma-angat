<?php
include("connect.php");
session_start();
if (isset($_POST['findshop'])) {
    $shopseller_id = $_POST['shopseller_id'];
    $txtmdlprodsellername = $_POST['txtmdlprodsellername'];
    echo "<script>window.location.href='shop-1column.php?shopseller_id=" . $shopseller_id . "';</script>";
}
