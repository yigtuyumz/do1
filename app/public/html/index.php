<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<div id="test">
<?php
$servername = "mysql";
$username = "devuser";
$password = "devuser";
$database = "devdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    echo "Veritabani baglantisi basarili!";
} catch(PDOException $e) {
    echo "Veritabani baglanti hatasi: " . $e->getMessage();
}
?>
</div>
</body>
</html>