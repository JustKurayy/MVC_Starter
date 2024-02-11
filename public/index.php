<?php
session_start();

require '../Modules/database.php'; //connects database
require '../Modules/functions.php'; //store all of your functions in here

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
/*
 * this separates the URL where there is a "/" and puts it in an array.
 * For example: if the $request is "/category/1" than $params wil be:
 *  [0] => ""
 *  [1] => "category"
 *  [2] => "1"
 */

$title = "MVC STARTER PACK"; //title will be displayed at the tab
$titleSuffix = ""; //sub title for the tab
$message = ""; //used for forms warnings

switch ($params[1]) {
    case 'login':
        $titleSuffix = ' | Login';
        include_once "../Templates/login.php";
        break;
    case "logout":
        include_once "../Modules/logout.php";
    default:
        $titleSuffix = ' | Login';
        include_once "../Templates/login.php";
        break;
}
