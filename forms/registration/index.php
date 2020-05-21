<?php
    if (isset($_POST['user-email']) && ($_POST['honeypot'] =='')) {
        require '../php/phpmysqlconnect.php';
        include "../php/registration_process.php";

        try {
            $sql = "INSERT INTO registration_results (name, age, email, role, emergency_contact_name, 
            emergency_contact_number, identity, saturday_events, sunday_events, accommodation) 
            VALUES ('$name', '$age', '$email', '$role', '$emergencyContactName', '$emergencyContactNumber', '$identity', '$satEvents', '$sunEvents', '$accommodation')";
            $conn->exec($sql);
        } catch (PDOException $e) {
            $error = "Error updating database: " . $e->getMessage();
            include '../includes/error.html.php';
            exit();
        }
    } else {
        include "registration.html.php"; 
    }
?>