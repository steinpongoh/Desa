<?php
require 'general.php';

function tambahPenjual($data){
    global $dbconnect;
    $nama_penjual=$data['nama_penjual'];
    $no_telepon=$data['no_telepon'];
    $alamat_toko=$data['alamat_toko'];
    $link_alamat_toko=$data['link_alamat_toko'];
    $query="INSERT INTO penjual VALUES('','$nama_penjual','$no_telepon','$alamat_toko','$link_alamat_toko')";
    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}

function ubahPenjual($data){
    global $dbconnect;
    $id=$data['id'];
    $nama_penjual=$data['nama_penjual'];
    $no_telepon=$data['no_telepon'];
    $alamat_toko=$data['alamat_toko'];
    $link_alamat_toko=$data['link_alamat_toko'];
    $query="UPDATE penjual SET nama_penjual='$nama_penjual',
    no_telepon='$no_telepon',
    alamat_toko='$alamat_toko',
    link_alamat_toko='$link_alamat_toko'
    WHERE id_penjual='$id'";
    mysqli_query($dbconnect, $query);
    return mysqli_affected_rows($dbconnect);
}

function hapusPenjual($id)
{
    global $dbconnect;
    mysqli_query($dbconnect, "DELETE FROM `penjual` WHERE id_penjual=$id");
}

function hapusProduk($id)
{
    global $dbconnect;
    mysqli_query($dbconnect, "DELETE FROM `produk` WHERE id_produk=$id");
}

function tambahProduk($data, $file){
    global $dbconnect;
    $direktori='../../img/umkm/';
    $id_penjual=$data['nama_penjual'];
    $nama_produk=$data['nama_produk'];
    $harga=$data['harga'];
    $detail_produk=$data['detail_produk'];
    $gambar=$file['namaFile']['name'];
    move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$gambar);
    $query="INSERT INTO produk VALUES('','$id_penjual','$nama_produk','$harga','$gambar','$detail_produk')";
    mysqli_query($dbconnect,$query);
    mysqli_affected_rows($dbconnect);
}

function ubahProduk($data,$file){
    global $dbconnect;
    
    $id=$data['id'];
    $oldFile=$data['oldFile'];
    $direktori='../../img/umkm/';
    $id_penjual=$data['nama_penjual'];
    $nama_produk=$data['nama_produk'];
    $harga=$data['harga'];
    $detail_produk=$data['detail_produk'];
    $checkFile=$file['namaFile']['name'];

    if($checkFile != ""){
        $gambar=$file['namaFile']['name'];
        move_uploaded_file($file['namaFile']['tmp_name'], $direktori.$gambar);
    } else {
        $gambar=$oldFile;
    }
    $query="UPDATE produk SET id_penjual='$id_penjual',
    nama_produk='$nama_produk',
    harga='$harga',
    gambar='$gambar',
    deskripsi='$detail_produk' WHERE id_produk='$id'";
    mysqli_query($dbconnect,$query);
    mysqli_affected_rows($dbconnect);
}
?>