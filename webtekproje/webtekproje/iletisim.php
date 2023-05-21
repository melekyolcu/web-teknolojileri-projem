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
            border: 2px solid white;
            border-radius: 3px;
            margin-top: 20px;
            margin-left: 3cm;
            margin-right: 3cm;
            margin-bottom: 20px;
        }

        h1 {
            background-color: #18023f;
            color: white;
            text-align: center;
            font-size: 24px;
            padding: 5px;
            border: 2px solid white;
            border-radius: 8px;
        }

        p {
            margin-bottom: 10px;
        }



    </style>
  
</head>
<body>
    <h1>Gönderilen İletişim Bilgileri:</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adSoyad = $_POST["adSoyad"];
        $email = $_POST["email"];
        $telefon = $_POST["telefon"];
        $cinsiyet = $_POST["cinsiyet"];
        $mesaj = $_POST["mesaj"];

        echo "<p><b>Ad Soyad:</b> $adSoyad</p>";
        echo "<p><b>E-posta:</b> $email</p>";
        echo "<p><b>Telefon:</b> $telefon</p>";
        echo "<p><b>Cinsiyet:</b> $cinsiyet</p>";
        echo "<p><b>Mesaj:</b> $mesaj</p>";
    }
    ?>

</body>
</html>