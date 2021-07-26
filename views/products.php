<?php include_once 'layout/header.php' ?>

 

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>six products abable-abable here.</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">

                <?php
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
                foreach($products as $key => $product){ ?>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#">
                          <img src="<?php echo $product ['image']; ?>" alt="">
                        </a>
                        <div class="down-content">
                          <a href="#"><h4><?php echo $product['name']; ?></h4></a>
                          <h6><?php echo $product['price'] .'<br>'; ?></h6>
                          <p> <?php echo $product ['details'] .'<br>'; ?></p>
                          <a href="http://localhost/shop/?page=cart&productserial=<?php echo $key?>">Add To Card!</a>
                          

                          <ul class="stars">
                          <?php
                          for ($i=1; $i<=5; $i++)	{
                            if($i > 0 && $i <= $product['review']){ ?>
                              <li><i class="fa fa-star"></i></li>
                          <?php }else{ ?>	  
                              <li><i class="fas fa-star"></i></li>
                          <?php }} ?>  
                          </ul>
                          <span>Reviews <?php echo $product ['review']; ?></span>
                        </div>
                      </div>
                    </div> 
                <?php } ?>


                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    

<?php include_once 'layout/footer.php' ?>