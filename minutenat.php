<!DOCTYPE html>
<html>
<head>
    
<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 
    
  
<script type="text/javascript" charset="utf8" src="stupidtable.min.js"></script>



<script type="text/javascript">
function deleteRow(id) {
$.post("delete.php" , {sid:id} , function(data){
$("#" + id).fadeOut('slow' , function(){$(this).remove();if(data)alert("Sters susucces");});
}); 
}</script>
</head>

<?php

 include 'header.php';
echo "<style>
table, th, td {
     border: 1px solid black;
}
</style>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "finalab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
echo ("<div class=\"container\">") ;
echo ("<div class=\"panel panel-primary\">") ;
echo "  <div class=\"panel-heading\"><center><h5>Convorbiri Nationale</h5></center></div>";
$sql = "SELECT id, Nume, Prenume FROM clienti";
$minat = "SELECT id,mnat FROM minvb";
$result = $conn->query($sql);
$minute=$conn->query($minat);
$pret=0.86;

if ($result->num_rows > 0) {
     echo "<table class=\"table table-hover\" id=\"simpleTable\">

<thead>
     <tr><th data-sort=\"int\">ID</th><th data-sort=\"string\"> First Name</th><th data-sort=\"string\">Last Name</th><th data-sort=\"int\">Minute</th><th data-sort=\"int\">Pret convorbire</th><th>Delete</th></tr> </thead> <tbody>";
     // output data of each row
  while($row = $result->fetch_assoc()) {
while($row1 = $minute->fetch_assoc()){
     if ($row['id']=$row1['id']) {


echo '

<tr id="' . $row['id'] . '">
<td>' . $row['id'] . '</td>
<td> '. $row["Nume"] . '</td>' . 
'<td>' . $row["Prenume"] . '</td>' . 
'<td>' . $row1["mnat"] . '</td>' .
'<td>' .$row1["mnat"]*$pret.' lei' . '</td>' .

'<td ><a class="deleteLink" onclick="deleteRow('.$row['id'].')">Delete</a></td>' .
'</tr>

';


           }} }
     echo " </tbody> </table>";
} else {
     echo "0 results";
}
echo ("</div>");

echo ("</div>");
$conn->close();
?>  

<script type="text/javascript">
  $("table").stupidtable();
</script>
<?php  include 'footer.php'; ?>
</html>