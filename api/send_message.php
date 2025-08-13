<?php
/**
 * Recieves information from a contact post and emails it to my email.
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
    echo "stmt execute success";
} else{
    echo "stmt execute failure: " . $stmt->error;
}

?>

