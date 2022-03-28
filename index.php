<?php

require ('vendor/autoload.php');

use DataTablePhp\Models\DataSource;
use DataTablePhp\Models\DataTable;


$ds = new DataSource(new \PDO('mysql:host=localhost;dbname=teste_datatable', 'root', 'Lucas1990'));
$resultSet = $ds->getResults('select * from teste');
$dt = new DataTable($ds);
echo "<pre>";
print_r($dt);
echo "</pre>";

echo "<pre>";
print_r($ds);
echo "</pre>";

// $dt->createColumns();

// $dt->createRows();


// $dt->render();





