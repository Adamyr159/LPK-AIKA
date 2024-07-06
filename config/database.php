<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "u5581581_ppdb_2021";
$url = "http://localhost/ppdb";

// koneksi database
$koneksi = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$koneksi) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
(isset($_GET['pg'])) ? $pg = $_GET['pg'] : $pg = '';
(isset($_GET['ac'])) ? $ac = $_GET['ac'] : $ac = '';

// SETTING WAKTU
date_default_timezone_set("Asia/Jakarta");
define('BASEPATH', dirname(__FILE__));

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}
