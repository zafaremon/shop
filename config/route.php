
<?php 

$page = 'home';
if(isset($_GET['page']))
    $page = $_GET['page'];

switch($page){

    case 'home':
    case '':
       loadController('home', 'index');
        break;

    case 'products':
        loadController('products', 'index');
        break;
    default:
        die('Page not found');
        break;
}