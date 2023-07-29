<?php
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$pnumber = $_POST['pNumber'];
$message = $_POST['message'];

$link = mysqli_connect("localhost", "root", "", "cse309_send_message");

if ($link === false) {
    die ("ERROR: Could not connect.".mysqli_connect_error());
}

$sql = "INSERT INTO message_info (FirstName, LastName, Email, PhoneNumber, Messages) VALUES ('$fname', '$lname', '$email', '$pnumber', '$message')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}

mysqli_close($link);

?>