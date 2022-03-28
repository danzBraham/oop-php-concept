<?php 

class Product {
   public $title = "Title",
         $author = "Author",
         $studio = "Studio";

   public function getLabel() {
      return "$this->title, $this->author";
   }
}

// $product1 = new Product();
// $product1->title = "One Piece";
// var_dump($product1);

// $product2 = new Product();
// $product2->title = "Gintama";
// $product2->addProperty = "ZEHAHAHAHA";
// var_dump($product2);

$product3 = new Product();
$product3->title = "One Piece";
$product3->author = "Eiichiro Oda";

$product4 = new Product();
$product4->title = "Gintama";
$product4->author = "Hideaki Sorachi";

echo "Anime " . $product3->getLabel();
echo "<br/>";
echo "Anime " . $product4->getLabel();

?>