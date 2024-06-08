<?php
session_start();
include "datablood.php";

if (isset($_POST['E-mail']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$email = validate($_POST['E-mail']);
$pass = validate($_POST['password']);


if (empty($email)) {
    header("Location: r.php?error=E-mail is required");
    exit();
} else if (empty($pass)) {
    header("Location: r.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['password'] === $pass) {
        echo "LOGGED IN!";
        $_SESSION['email'] = $row['email'];
        // $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: dlogin.php");
        exit();
    } else {
        header("Location: r.php?error=Incorrect email or Password.");
        exit();
    }
} else {
    header("Location: r.php");
    exit();
}





?>