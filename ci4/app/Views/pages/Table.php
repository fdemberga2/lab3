<?php
$servername = "192.168.150.213";
$username = "webprogmi212";
$password = "b3ntRhino98";
$dbname = "webprogmi212";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$db= $conn;

$tableName="fdemberga_masterclass";

$columns= ['NAME', 'EMAIL','WEBSITE','COMMENT','GENDER'];

$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Of Students is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id ASC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "CEO Is Going Bankcrupt"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
    </body>
</html>
