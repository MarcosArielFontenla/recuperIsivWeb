<?php
    $name = $_POST[Constants::$USER_NAME];
    $lastname = $_POST[Constants::$USER_LAST_NAME];
    $age = $_POST[Constants::$USER_AGE];

    $data = array(
        'nombre' => $name,
        'apellido' => $lastname,
        'age' => $age
    );
    echo json_encode(array("user" => $data));
?>