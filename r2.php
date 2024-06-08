<?php
session_start();
include "datablood.php";

// Validate and sanitize input data
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["submitt"])) {
    $fna = validate($_POST["FULLNAME"]);
    $cii = validate($_POST["contactinfo"]);
    $blg = validate($_POST["bloodgroup"]);
    $urg = validate($_POST["urgency"]);
    $addinfoo = validate($_POST["additionalInfo"]);

    // Truncate inputs if necessary
    if (strlen($fna) > 255) $fna = substr($fna, 0, 255);
    if (strlen($cii) > 255) $cii = substr($cii, 0, 255);
    if (strlen($blg) > 255) $blg = substr($blg, 0, 255);
    if (strlen($urg) > 255) $urg = substr($urg, 0, 255);
    if (strlen($addinfoo) > 255) $addinfoo = substr($addinfoo, 0, 255);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO request (funame, cinfo, bldgrp, urg, addinfo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fna, $cii, $blg, $urg, $addinfoo);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Form submitted successfully. Check your mailbox for further instructions.";
    } else {
        $_SESSION['message'] = "Form submission failed!";
    }

    $stmt->close();
    $conn->close();

    header("Location: dlogin.php");
    exit;
} else {
    $_SESSION['message'] = "Invalid form submission.";
    header("Location: dlogin.php");
    exit;
}
