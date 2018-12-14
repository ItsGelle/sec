<?php
/**
 * Created by PHPSTORM IDEA.
 * User: j.buurman
 * Date: 07-12-18
 * Time: 13:59
 */
// Als de parameter aanwezig is
// stop de parameter in de array met de juiste waarde
// stop de parameter in de array met waarde NULL

include "validationLib.php";
include "formParam.php";

$get_params = only_this_get_params($parameters);
var_dump($get_params);
echo "<br />";
// Heeft de parameter een waarde

// Check alle parameters die eerder toegestaan zijn
function check_params_on_empty($check_params = []) {
    foreach ($check_params as $item) {
        if (is_not_empty($item)) {
            echo 'value: ' . $item;
        } else {
            echo 'No value';
        }
        echo "<br />";
    }
}
check_params_on_empty( $get_params );