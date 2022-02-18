<?php

require_once ('DB.php');
require_once ('DB_functions.php');
require_once ('Region.php');

$success = connect('localhost', 'world', 'root', '');

$newRegion = new Region();
// generate number
$randomNum = rand(1, 999);

$newRegion->name = 'Area ' . $randomNum;
$newRegion->slug = 'area_' . $randomNum;
$newRegion->insert();

// delete data
public function delete()
{
    $query = "
    DELETE FROM `regions`
    WHERE `id` = ?
";

    DB::delete($query, [$this->id]);
}


echo('<pre>');
var_export($newRegion);
echo('</pre>');
