<?php
    require_once 'dbconfig.php';

    try
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
      $error = "Could not connect to the database $dbname.";
      include '../includes/error.html.php';
      exit();
    }
?>