
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      return;
    }
    else{
        $name = $_POST["Name"];
    }
    if(empty($_POST["MIS"])) {
        $miserror = "MIS is required";
        return;
    } else{
        $mis = $_POST["MIS"];
    }
    if(empty($_POST["Age"])) {
        $ageerror = "age required";
        return;
    } else{
        $age = $_POST["Age"];
    }*/
    $name = $_POST["Name"];
    $mis = $_POST["MIS"];
    $age = $_POST["Age"];
  
    
$sql = "INSERT INTO student_info (MIS, Name, Age)
VALUES ('$mis', '$name', '$age')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<script>
    window.open("index.php","_self");
</script>
