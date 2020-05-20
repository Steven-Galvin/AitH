<?php
    // $servername = "srv603";
    // $dbname = "stevenga_ace_in_the_hole";
    // $username = "stevenga_aith";
    // $password = "4ce-in-the-H0l3!";

    $servername = "localhost";
    $dbname = "stevenga_ace_in_the_hole";
    $username = "stevenga_aith";
    $password = "4ce-in-the-H0l3!";

    try
    {
      $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
      $error = 'Unable to connect to the database server.';
      include 'error.html.php';
      exit();
    }
?>