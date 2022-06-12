<?php
// https://www.php.net/manual/en/function.date.php
// https://www.php.net/manual/en/function.strtotime.php
    date_default_timezone_set('Asia/Dhaka');


    $result = date("Y-m-d H:i:s");
    $result = date("M-D-Y");
    $result = date("dS-F-y");
    $result = date("d-m-Y H:i:s");
    $result = date("d-m-Y h:i:s");
    $result = date("d-m-Y h:i:s a");
    $result = date("d-m-Y h:i:s A");
    $result = date("z");
    $result = date("t");
    $result = date("d-m-Y h:i:s a", time() + (60 * 60 * 24 * 1));
    $result = date("d-m-Y h:i:s a", time(+1));

    echo $result;