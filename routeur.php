<?php

$page = $_GET["page"];

switch ($page) {
    case 'home':
        require "home.php";
        break;
    case 'categorie':
        require "categorie.php";
        break;
    case 'single':
        require "single.php";
        break;
    
    default:
        require "home.php";
        break;
}