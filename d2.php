<?php
session_start();
include "datablood.php"; {

    if (isset($_POST["SUBMIT"])) {
        $f = $_POST["fullName"];
        $e = $_POST["email"];
        $dateob = $_POST["dob"];
        $ag = $_POST["age"];
        $ci = $_POST["contactInfo"];
        $add = $_POST["address"];
        $bgg = $_POST["bloodGroup"];
        $rii = $_POST["recentInfections"];
        $rvv = $_POST["recentVaccinations"];
        $th = $_POST["travelHistory"];
        $rss = $_POST["recentSurgeries"];
        $arr = $_POST["adverseReactions"];

        $q="insert into donation values ('$f','$dateob','$bgg','$rvv','$rss','$e','$ag','$add','$rii','$th','$arr')";
        $result = mysqli_query($conn, $q);
        if ($result) {
            $_SESSION['message'] = "Form submitted successfully! check mailbox for futher instructions";
        } else {
            $_SESSION['message'] = "Form submission failed!";
        }
    
        header("Location: dlogin.php");
        exit;




    }
    exit;
}
?>