<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "blood";  

// Enabled error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($sname, $uname, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "";
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
