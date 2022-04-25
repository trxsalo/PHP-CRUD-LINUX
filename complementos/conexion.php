<?php

session_start();

$conn = mysqli_connect(
    '127.0.0.1:3306', //modifica
    'salo',
    '0108',
    'dbCrud'
) or die(mysqli_erro($mysqli));
?>
