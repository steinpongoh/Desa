<?php
include '../functions/dbconnect.php';
$id=$_POST['id'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail -> IsSMTP();
$mail -> IsHTML(true);
$mail -> SMTPAuth   = true;
$mail -> Host       ='SMTP.gmail.com';
$mail -> Port       =465;
$mail -> SMTPSecure ='ssl';
$mail -> Username   ='ulllrauulll@gmail.com';
$mail -> Password   ='sqqelzaobjcnxdfm';
$mail -> From       ='ulllrauulll@gmail.com';
$mail -> FromName   ='Rauulll ULLL';
$mail -> addAddress($email);
$mail -> Subject    ='Balasan Pengaduan Admin Desa Tondangow';
$mail -> Body       = $pesan;

if($mail->send()){
	echo	"
        	<script>
        		alert ('Email Berhasil Terkirim');
        		document.location.href = '../controllers/dataPengaduan.php';
        	 </script>
        	";
			$query="UPDATE pengaduan SET status='1'
			WHERE id='$id'";
			
			mysqli_query($dbconnect,$query);
			return mysqli_affected_rows($dbconnect);
}else{
    echo "Email gagal terkirim";
};

?>