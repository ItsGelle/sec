<?php

function only_this_get_params($this_get_params = []) {
    $allowed_get_array = [];

    foreach($this_get_params as $param) {

        if(isset($_GET[$param])) {
            $allowed_get_array[$param] = $_GET[$param];
        } else {
            $allowed_get_array[$param] = NULL;
        }

    }

    return $allowed_get_array;
}

function is_not_empty($value) {
$real_value = trim($value);
return isset($real_value) && $real_value !== "";
}

function is_length_param($param) {

}