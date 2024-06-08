<?php
session_start();
include "datablood.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

try {
    if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phno']) && isset($_POST['feedback'])) {
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $no = validate($_POST['phno']);
        $feed = validate($_POST['feedback']);

        if (empty($name)) {
            header("Location: help.php?error=Name is required");
            exit();
        } elseif (empty($email)) {
            header("Location: help.php?error=Email is required");
            exit();
        } elseif (empty($no)) {
            header("Location: help.php?error=Ph No. is required");
            exit();
        } elseif (empty($feed)) {
            header("Location: help.php?error=Feedback is required");
            exit();
        }

        $q2 = "INSERT INTO feedtable (name, email, no, feed) VALUES ('$name', '$email', '$no', '$feed')";
        if (mysqli_query($conn, $q2)) {
            header("Location: help.php?success=Feedback sent");
        } else {
            header("Location: help.php?error=Failed to send feedback");
        }
        exit();
    } else {
        header("Location: help.php?error=Invalid access");
        exit();
    }
} catch (Exception $e) {
    header("Location: help.php?error=" . $e->getMessage());
    exit();
}
?>
