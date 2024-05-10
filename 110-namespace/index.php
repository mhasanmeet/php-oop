<?php

require "./students.php";
require "./teachers.php";

$studentsName = new students\names("Kazi");
$teachersName = new teachers\names("Mahmudul");



/* we can also use "use" statement

use students\names as studentsName;
use teachers\names as teachersName;

$studentsName = new studentsName("Kazi");
$teachersName = new teachersName("Mahmudul");
*/
