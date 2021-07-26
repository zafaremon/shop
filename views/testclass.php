


<?php

class Food {

    public $name;
    public $test;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
    
    function set_tes($test){
        $this->tes = $test;
    }

    function get_tes(){
        return $this->tes;
    }
}

$rice = new Food();
$nonveg = new Food();


$rice->set_name('Rice');
$rice->set_tes('Its delicious.');

$nonveg->set_name('Beef');
$nonveg->set_tes('Its delicious too.');

echo $rice->get_name();
echo ": " .$rice->get_tes();

echo "<br>";

echo $nonveg->get_name();  
echo ": " .$nonveg->get_tes() .'<br>';

?>

<!DOCTYPE html>
<html>
<body>

<a href="http://localhost/shop/">Back Home!</a>


</body>
</html>

