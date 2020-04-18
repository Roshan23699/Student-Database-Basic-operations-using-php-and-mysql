<html>

<head>
    <style>
        label{
            color:white;
            margin-top:2px;
            margin-left:50px;
            margin-right:10px;
        }
      form  input{
           margin-left:20px;
       }
       li{
           font-weight:bold;
       }
       
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
    <h1 id="start" class = "jumbotron" style="text-align:center;font-weight:bolder">Student Database</h1>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">COEP</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a onclick="disp('home')" href="index.php#start">Home</a></li>
                <li><a href="index.php#start" onclick="disp('add')">Add Student Info.</a></li>
                <li><a href="index.php#start" onclick="disp('mod')">Modify Student Info.</a>
                </li>
                <li><a href="index.php#start" onclick="disp('del')">Delete</a></li>

            </ul>
        </div>
        <form class="form-inline" method = "POST" action="deletion.php" style="display:none;" id="form" >
        <p style="color:silver;">Enter the Mis of the student to be updated</p>
        <label id="formis1" for="mis">MIS:</label>  
        <input type="number" max = "111900000" min = "111600000" id="mis1" placeholder="MIS to be updated" class="form-control-plaintext" name="MIS1">
            <p style="color:silver; margin-top:10px;">Enter the Student Info. to be added</p>
        <label id="formis" for="mis">MIS:</label>
              
              <input type="number" max = "111900000" min = "111600000" id="mis" placeholder="Enter student MIS" class="form-control-plaintext" name="MIS">
                <label id="forname" for="name">Name:</label>
               
                    <input type="text" id="name" placeholder="Enter student name" class="form-control-plaintext" name="Name">
               
                <label id="forage" for="age">Age:</label>
              
                    <input type="number" min= "10" max = "30" id="age" placeholder="Enter student age" class="form-control-plaintext" name="Age">
               
                
                

           
                <input id="btnx" onclick="check()" type="submit" value="Submit" class="btn btn-classic btn-sm" name="ADD STUDENT">
              
        </form>

    </nav>



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

$sql = "SELECT Name, Age, MIS FROM student_info";
$result = $conn->query($sql);
echo "<table class ='table-hover table-stripped table'>";
echo "<tr>";
echo "<th>" . "Name" . "</td><th>" . "Age" . "</th><th>" . "MIS" . "</th>";
echo "</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["MIS"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>