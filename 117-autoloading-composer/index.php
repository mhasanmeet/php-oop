<?php

use App\Controller\UserController;
use App\Models\UserModel;
require "vendor/autoload.php";


$UserModel = new UserModel();
echo $UserModel->name;

$UserController = new UserController();
echo $UserController->name;
