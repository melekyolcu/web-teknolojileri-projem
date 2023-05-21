<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Bilgileri</title>

    <style>

body {
            background-color: #333333;
            color: white;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 20px;
            padding-bottom: 10px;
            margin-top: 70px;
            margin-left: 3cm;
            margin-right: 3cm;
            margin-bottom: 20px;
        }

        h1 {
            
            background-color: #18023f;
            color: white;
            text-align: center;
            font-size: 24px;
            padding: 20px;
            border: 4px solid white;
            border-radius: 10px;
            margin-top: 100px;
        }

       

    </style>
  
</head>
<body>

<?php
$kullaniciadi = $_POST['kullanici'];
$sifre = $_POST['sifre'];

if ($kullaniciadi == 'g211210077@sakarya.edu.tr' && $sifre == 'g211210077') 
{
    
   echo "<br><br> <h1><b> Hoşgeldiniz G211210077 </b> </h1> ";
   exit;
    
} 
else
 {
    header("location: login.html");
    exit;
}
?>