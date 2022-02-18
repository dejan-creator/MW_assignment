<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

function getAllAreas()
{
    $query = "
        SELECT * FROM `regions`
        WHERE `name` LIKE ?
    ";

    return DB::select($query, ['Area%'], "Region");
}

$listOfResults = getAllAreas();

foreach ($listOfResults as $key => $area) {
    if (substr($area->name, 5) !== substr($area->slug, 5)) {
        $area->delete();
        unset($listOfResults[$key]);
    }
}


echo('<pre>');
var_export($listOfResults);
echo('</pre>');
