<?php
require dirname(__DIR__) . '/vendor/autoload.php';
use Faker\Factory;

$faker = Factory::create('fr_ci');
$pdo = new PDO('mysql:host=localhost;dbname=mon_djassa','root','',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$pdo->exec('SET FOREIGN_KEY_CHECKS = 0');

$pdo->exec('TRUNCATE TABLE produits');
$pdo->exec('TRUNCATE TABLE admins');
$pdo->exec('TRUNCATE TABLE users');
$pdo->exec('TRUNCATE TABLE man');
$pdo->exec('TRUNCATE TABLE woman');
$pdo->exec('TRUNCATE TABLE childs');
$pdo->exec('TRUNCATE TABLE accessory');

$pdo->exec('SET FOREIGN_KEY_CHECKS = 1');
$man = [];
$woman = [];
$childs = [];
$accessory = [];


for ($i=0; $i < 50; $i++) { 
    $pdo->exec("INSERT INTO man SET name='{$faker->sentence()}', slug='{$faker->slug}',content='{$faker->paragraphs(rand(3,10),true)}',create_at='{$faker->date()}',product_pic1='{$faker->imageUrl()}',product_pic2='{$faker->imageUrl()}',product_pic3='{$faker->imageUrl()}',product_pic4='{$faker->imageUrl()}',price='{#$i}' ");
    $man[] = $pdo->lastInsertId();
}

for ($i=0; $i < 50; $i++) { 
    $pdo->exec("INSERT INTO woman SET name='{$faker->sentence()}', slug='{$faker->slug}',content='{$faker->paragraphs(rand(3,10),true)}',create_at='{$faker->date()}',product_pic1='{$faker->imageUrl()}',product_pic2='{$faker->imageUrl()}',product_pic3='{$faker->imageUrl()}',product_pic4='{$faker->imageUrl()}',price='{#$i}' ");
    $woman[] = $pdo->lastInsertId();
}

for ($i=0; $i < 50; $i++) { 
    $pdo->exec("INSERT INTO childs SET name='{$faker->sentence()}', slug='{$faker->slug}',content='{$faker->paragraphs(rand(3,10),true)}',create_at='{$faker->date()}',product_pic1='{$faker->imageUrl()}',product_pic2='{$faker->imageUrl()}',product_pic3='{$faker->imageUrl()}',product_pic4='{$faker->imageUrl()}',price='{#$i}' ");
    $childs[] = $pdo->lastInsertId();
}

for ($i=0; $i < 50; $i++) { 
    $pdo->exec("INSERT INTO accessory SET name='{$faker->sentence()}', slug='{$faker->slug}',content='{$faker->paragraphs(rand(3,10),true)}',create_at='{$faker->date()}',product_pic1='{$faker->imageUrl()}',product_pic2='{$faker->imageUrl()}',product_pic3='{$faker->imageUrl()}',product_pic4='{$faker->imageUrl()}',price='{#$i}' ");
    $accessory[] = $pdo->lastInsertId();
}




for ($i=0; $i < 5; $i++) { 
    $pdo->exec("INSERT INTO users SET pseudo='{$faker->userName}', email='{$faker->email}',number_phone='{$faker->phoneNumber}',user_pic='{$faker->imageUrl()}' ");
}

$password = password_hash('ôthentik',PASSWORD_DEFAULT);
$pdo->exec("INSERT INTO admins SET pseudo='{$faker->userName}', email='{$faker->email}',number_phone='{$faker->phoneNumber}',user_pic='{$faker->imageUrl()}',password='{$password}' ");



