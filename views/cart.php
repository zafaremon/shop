
<?php  

echo $_GET ['productserial'] .'<br>';
$value = $_GET ['productserial'];


$products=[

    [
        'name' => 'Product 1',
        'price' => '20.9$',
        'details' => 'Its a pear of shoes',
        'review' => 4,
        'image'=> 'assets/images/product_01.jpg',
    ],
 
    [
         'name' => 'Product 2',
         'price' => '30.95$',
         'details' => 'Its a Jacket',
         'review' => 3,
         'image'=> 'assets/images/product_02.jpg',
    ],
    
    [
         'name' => 'Product 3',
         'price' => '10.19$',
         'details' => 'Some Blancket',
         'review' => 5,
         'image'=> 'assets/images/product_03.jpg',
    ],
     
    [
         'name' => 'Product 4',
         'price' => '13.59$',
         'details' => 'Cute Dalls',
         'review' => 2,
         'image'=> 'assets/images/product_04.jpg',

    ],
    
     [
         'name' => 'Product 5',
         'price' => '30.39$',
         'details' => 'Its nice looking and stylish jacket.',
         'review' => 1,
         'image'=> 'assets/images/product_05.jpg',
     ],
     
     [
         'name' => 'Product 6',
         'price' => '65.9$',
         'details' => 'Snow man.',
         'review' => 1,
         'image'=> 'assets/images/product_06.jpg',
     ],
 
    ];

foreach($products as $key=>$product){

    if($key == $value){
    var_dump ($product);
    }

}

var_dump ($product);

?>



