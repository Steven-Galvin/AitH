<?php
    if (isset($_POST['user-email']) && ($_POST['honeypot'] =='')) {
        require "../php/phpmysqlconnect.php";
        include "../php/help_process.php";

        try {
            $sql = "INSERT INTO contact_results (name, email, role, comment) 
            VALUES ('$name', '$email', '$role', '$comment')";
            $conn->exec($sql);
        } catch (PDOException $e) {
            $error = "Error updating database: " . $e->getMessage();
            include '../includes/error.html.php';
            exit();
        }
    } else {
        include "help.html.php"; 
    }
?>