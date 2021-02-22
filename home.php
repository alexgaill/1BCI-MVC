<?php

require "Database.php";

$db = new Database();
$categories = $db->getData("SELECT * FROM categorie");

include "Views/home_template.php";
