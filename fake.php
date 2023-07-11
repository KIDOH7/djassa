<?php

use Faker\Factory;

require 'config.php';

require 'vendor/autoload.php';

$faker = Factory::create('fr_FR');
$pdo->exec('SET FOREIGN_KEY_CHECKS = 0');
$pdo->exec('TRUNCATE TABLE woman');
$pdo->exec('SET FOREIGN_KEY_CHECKS = 1');



$posts = [];

for ($i=1; $i <= 20 ; $i++) { 
    $pdo->exec("INSERT INTO woman SET name_products='{$faker->sentence()}', desc_products='{$faker->paragraphs(rand(3,15),true)}', pic1_products='{$faker->imageUrl()}'");
    $posts[] = $pdo->lastInsertId();
}