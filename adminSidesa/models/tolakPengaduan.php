<?php
require '../functions/pengaduan.php';
$id=$_GET['id'];    
$query=query("SELECT * FROM pengaduan WHERE id=$id")[0];
$result="UPDATE pengaduan SET status='2' WHERE id='$id'";

mysqli_query($dbconnect,$result);
return mysqli_affected_rows($dbconnect);
echo "
        <script>
            alert('Pengaduan Berhasil ditolak');
            document.location.href='../controllers/dataPengaduan.php';
        </script> 
    ";
?>