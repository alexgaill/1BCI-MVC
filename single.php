<?php

require "Database.php";

$id = $_GET["id"];

$db = new Database();
$article = $db->getData("SELECT * FROM article 
                            INNER JOIN categorie ON article.categorie_id = categorie.id
                            WHERE article.id=$id",
                            true
                            );


include "Views/single_template.php";