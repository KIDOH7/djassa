<?php 
    require '../vendor/autoload.php' ;

$router = new AltoRouter;
$uri = $_SERVER['REQUEST_URI'];
$router->map('GET','/hommes',function () {
    require '../views/posts/man/man.php';
});
$macth = $router->match();
if($macth !== null) {
    $macth['target']();
    // require '../footer.php';
}