<?php
require 'general.php';


function tambahPengumuman($data)
{
    global $dbconnect;
    $judul = $data['judul_pengumuman'];
    $detail = $data['detail_pengumuman'];
    $tanggal = $data['tanggal_pengumuman'];
    $query = "INSERT INTO pengumuman (judul_pengumuman, detail_pengumuman, tanggal_pengumuman) VALUES ('$judul', '$detail', '$tanggal')";
    mysqli_query($dbconnect, $query);

    return mysqli_affected_rows($dbconnect);
}

function ubahPengumuman($data)
{
    global $dbconnect;
    $id = $data['id'];
    $judul = $data['judul_pengumuman'];
    $detail = $data['detail_pengumuman'];
    $tanggal = $data['tanggal_pengumuman'];
    $query = "UPDATE pengumuman SET
    judul_pengumuman='$judul',
    detail_pengumuman='$detail',
    tanggal_pengumuman='$tanggal' WHERE id='$id'";
    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}


?>