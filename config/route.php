
<?php 

$page = 'home';
if(isset($_GET['page']))
    $page = $_GET['page'];

switch($page){

    case 'home':
    case '':
       loadController('Home', 'index');
        break;

    case 'products':
        loadController('Products', 'index');
        break;
    
        case 'about-us':    
        loadController('AboutUs', 'index'); 
            break;
    
        case 'contact-us':
        loadController('ContactUs', 'index');
        break;

        case 'test-me':
            loadController('TestMe', 'index');
            break;

        case 'test-class':
            loadController('ClassTest', 'index'); 
        break;

        case 'cart':
            loadController('Cart', 'index'); 
        break;
           

    default:
        die('Page not found');
        break;
}