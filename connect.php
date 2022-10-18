<?php
    $firstName = $mysqli->real_escape_string(implode(" ", $_POST['firstName']));
    $lastName = $mysqli->real_escape_string(implode(" ",  $_POST['lastName']));
    $email = $mysqli->real_escape_string(implode(" ", $_post['email']));
    $includedParty = $mysqli->real_escape_string(implode(" ", $_POST['includedParty']));

    //database conneciton
    $server = '73.25.28.229:3306';
    $username = 'remoteConnection';
    $password = 'remoteAccessWedding';
    $database = 'wedding';
    $table = 'rsvp';
    

    $result = $mysqli->query("INSERT IGNORE INTO $table (
        firstName,
        lastName,
        email,
        includedParty
    ) VALUES (
        '$firstName',
        '$lastName',
        '$email',
        '$includedParty')
    ");
?>
