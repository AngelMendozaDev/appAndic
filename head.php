<?php
session_start();

if(!$_SESSION['ID']|| $_SESSION['ID'] == "")
    header("location:index.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndicApp-<?php echo $_SESSION['NameUs'] ?></title>
    <link rel="icon" href="media/icons/Logo.png">
    <link rel="stylesheet" href="lib/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
