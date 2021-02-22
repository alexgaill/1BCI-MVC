<?php

require "Database.php";

    $id = $_GET["id"];

    $db = new Database();
    $articles = $db->getData("SELECT * FROM article WHERE categorie_id = $id");

include "Views/categorie_template.php";