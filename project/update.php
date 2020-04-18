<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "student";
//create connetion
$conn = new mysqli($servername, $username, $password, $databasename);
//check connection
if($conn->connect_error) {
    die("Error occured:".$conn->connect_error);

}

$mis1 = $_POST["MIS1"];
$mis = $_POST["MIS"];
$name = $_POST["Name"];
$age = $_POST["Age"];




$sql = "UPDATE student_info SET Age='$age', MIS = '$mis', Name = '$name' WHERE MIS = '$mis1'";
if($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}
else{
    echo "error occured updating database";
}
?>

<script>
   window.open("index.php", "_self");
</script>
