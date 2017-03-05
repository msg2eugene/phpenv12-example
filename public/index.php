<?php
require_once '../vendor/autoload.php';
require_once '../vendor/catfan/medoo/src/Medoo.php';
#require_once "Medoo.php";
#require_once "Car.php";

echo "Hello World";

#$array = [1, "apple", 2, "foo", "bar"];
#var_dump($array);
#dump($array);


#$car =  new Car(10, 10);

/*$dtb = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => '../storage/database.db'
]);*/
   

#use catfan\medoo\src\Medoo.php; 

$database = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => '../storage/database.db'
]);

dump($database);