<?php
require 'general.php';

function tambahDanadesa($data){
    global $dbconnect;
    $informasi=$data['informasi'];
    $detail=$data['detail'];
    $query="INSERT INTO danadesa VALUES ('','$informasi','$detail')";
    mysqli_query($dbconnect,$query);
    return mysqli_affected_rows($dbconnect);
    
}
?>