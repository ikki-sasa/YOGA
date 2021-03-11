<? php
$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'yooga';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection échoué: " . mysqli_connect_error());
}