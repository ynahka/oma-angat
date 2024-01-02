<?php
if (isset($_POST['findshop'])) {
    $shopsellerID = $_POST['shopsellerID'];
    $txtmdlprodsellername = $_POST['txtmdlprodsellername'];
    echo "<script>window.location.href='index.php?url=myshop&shopsellerID=" . $shopsellerID . "&sellername=" . $txtmdlprodsellername . "';</script>";
}
