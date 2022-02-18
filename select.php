<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

function getAreasByFirstDigit($number)
{//    @TODO No. 2
    $query = "
    SELECT * FROM `regions`
    WHERE `name` LIKE ?
    ORDER BY `name` DESC
    LIMIT 5
    ";

    return select($query, ['Area ' . $number . '%'], 'Region');

}

$listOfResults = getAreasByFirstDigit(5);

echo('<pre>');
var_export($listOfResults);
echo('</pre>');
