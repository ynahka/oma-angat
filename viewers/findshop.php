<?php
if (isset($_POST['findshop'])) {
    $shopseller_id = $_POST['shopseller_id'];
    $txtmdlprodsellername = $_POST['txtmdlprodsellername'];
    echo "<script>window.location.href='index.php?url=myshop&shopseller_id=" . $shopseller_id . "&sellername=" . $txtmdlprodsellername . "';</script>";
}
