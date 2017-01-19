
<?php
if(isset($_REQUEST["sid"]))
{
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "finalab";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("delete FROM mint where id=".$_POST['sid']);

$conn->query("delete FROM clienti where id=".$_POST['sid']);

}else echo 'Not Deleted Error Occured';
?>