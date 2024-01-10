<?php 

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Product.php';


$cat1 = new Category('Dog', './assets/dog.png');
$cat2 = new Category('Cat', './assets/cat.png');

$prod1 = new Food($cat1);
$prod1->set_title('Prolife Croccantini');
$prod1->set_image('https://www.prolife-pet.it/media/mod_catalog/items/55/pet-006.jpg');
$prod1->set_price(10.99);
$prod1->set_name('Cibo');

$prod2 = new Kennel($cat2);
$prod2->set_title('Cuccia per gatti, Rossa');
$prod2->set_image('https://i.etsystatic.com/6497391/r/il/728a61/923513298/il_570xN.923513298_a7uv.jpg');
$prod2->set_price(25.99);
$prod2->set_usage('Interni');
$prod2->set_name('Cuccia');

$prod3 = new Toy($cat1);
$prod3->set_title('Osso giocattolo');
$prod3->set_image('https://barf-specialista.it/1554-large/osso-giocattolo.jpg');
$prod3->set_price(8.99);
$prod3->set_material('Gomma');
$prod3->set_name('Giocattolo');


$products = [
    $prod1,
    $prod2,
    $prod3
];

$categories = [
    $cat1,
    $cat2
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row row-cols-3 mt-5">
            <?php foreach($products as $product) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->get_image() ?>" class="card-img-top" alt="<?php echo $product->get_title() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->get_title() ?></h5>
                            <p class="card-text"><?php echo $product->get_price() ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <img src="<?php echo $product->categories->icon ?>" alt=""> 
                            </li>
                            <li class="list-group-item"><?php echo $product->get_name() ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>

    
    
</body>
</html>
