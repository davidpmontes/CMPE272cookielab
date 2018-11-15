<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM listofusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $i = 0;
    while($row = $result->fetch_assoc()) {
    	$i++;
        echo $i . ". " . $row["lastname"]. ", " . $row["firstname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
