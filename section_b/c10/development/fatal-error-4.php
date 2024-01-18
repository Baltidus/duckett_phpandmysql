<?php 
class Basket {}
//     public string $product;
    
//     function __construct(string $product)
//     {
//         $this->product = $product;
//     }

//     function getBasket() {
//         return $this->product;
//     }
// }
// $basket = new Basket('Pétanques'); 
$result = $basket->getBasket(); 
?>
<h1>Basket</h1>
<h2><?= $result ?></h2>