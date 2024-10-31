<?php
session_start();
include("inc_koneksi.php");
if(!isset($_SESSION['login_username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="home.php"> Home </a></li>
                <li><a href="home_perhitungan.php"> perhitungan kelayakan rumah </a></li>
                <li><a href="home_pertanyaan.php"> Tanya Jawab Program</a></li>
                <li><a href="logout.php"> logout </a></li>
            </ul>
        </nav>