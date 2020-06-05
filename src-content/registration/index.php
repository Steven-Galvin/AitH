<?php

    $path_to_url = "../";
    $page_title = "Ace in the Hole | Registration";
    $page_content = "Get registered with Ace in the Hole as an athelete or volunteer!";
    $page_stylesheets = array(
        "<link rel='stylesheet/less' type='text/css' href='../styles/styles.less'>",
		"<link rel='stylesheet/less' type='text/css' href='../styles/registration.less'>"
    );

    $page_heading = "Register with us today!";
    $header_id = "registration_header";

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