<?php
/**
 * Recieves information from a contact post and stores responses in a database.
 */

declare (strict_types=1);


$query = "INSERT INTO messages (message, email, phone) VALUES (?, ?, ?)";
$ini = parse_ini_file("/Argonware/.ini", true)["database"];

//print_r($ini);

$mysqli = new mysqli($ini["host"], $ini["username"], $ini["password"], "argonware");

if($mysqli->connect_error != null){
    echo "Mysql connection error: " . $mysqli->connect_error;
    return;
}

$stmt = $mysqli->prepare($query);
$stmt->bind_param("sss", $_POST["message"], $_POST["email"], $_POST["phone"]);

if($stmt->execute()){
    echo "<p>Success<br>Thank you for sending a message.</p>";
} else{
    echo "<p>";
    echo "Failure: " . $stmt->error;
    echo "<br>Please contact the owner through other listead means.";
    echo "</p>";
}

?>

