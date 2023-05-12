<?php
$kullaniciadi = $_POST['kullanici'];
$sifre = $_POST['sifre'];

if ($kullaniciadi == 'g211210077@sakarya.edu.tr' && $sifre == 'g211210077') 
{
    
   echo "<br><br><p><b> Hoşgeldiniz g211210077 </b> </p> ";
   exit;
    
} 
else
 {
    header("location: login.html");
    exit;
}
?>