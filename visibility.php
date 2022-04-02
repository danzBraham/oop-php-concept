<?php 

class AniManga {
   public $title,
         $author,
         $released;

   protected $discount = 0;

   private $price;

   public function __construct($title = "Title", $author = "Author", $released = "date release", $price = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->released = $released;
      $this->price = $price;
   }

   public function getPrice() {
      return $this->price - ($this->price * $this->discount / 100);
   }

   public function getLabel() {
      return "$this->title | $this->author";
   }

   public function getFullInfo() {
      $str = "{$this->getLabel()} | {$this->released} | Rp{$this->price}";
      return $str;
   }
}

class Anime extends AniManga {
   public $studio,
         $eps;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $studio = "Studio", $eps = 0, $price = 0) {
      parent::__construct($title, $author, $released, $price);
      $this->studio = $studio;
      $this->eps = $eps;
   }

   public function getFullInfo() {
      $str = "Anime : " . parent::getFullInfo() . " | {$this->studio} | {$this->eps} Eps";
      return $str;
   }

   public function setDiscount($discount) {
      return $this->discount = $discount;
   }
}

class Manga extends AniManga {
   public $chapt;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $chapt = 0, $price = 0) {
      parent::__construct($title, $author, $released, $price);
      $this->chapt = $chapt;
   }

   public function getFullInfo() {
      $str = "Manga : " . parent::getFullInfo() . " | {$this->chapt} Chapters";
      return $str;
   }

   public function setDiscount($discount) {
      return $this->discount = $discount;
   }
}

class AnimeInfo {
   public function print (Anime $anime) {
      $info = "Anime Information : {$anime->title} | {$anime->author} | {$anime->studio}";
      return $info;
   }
}

// Anime : Hunter x Hunter | Yoshihiro Togashi | 2 Oct 2011 | Madhouse | 148 eps | Rp2.000.000
$animanga1 = new Anime("Hunter x Hunter", "Yoshihiro Togashi", "2 Oct 2011", "Madhouse", 148, 2000000);
// Manga : Berserk | Miura Kentarou | 25 Aug  1989 | 380 Chapters | Rp40.000
$animanga2 = new Manga("Berserk", "Miura Kentarou", "25 Aug 1989", 380, 40000);

echo $animanga1->getFullInfo();
echo "<br />";
echo $animanga2->getFullInfo();
echo "<hr />";

$animanga1->setDiscount(70);
echo "Rp{$animanga1->getPrice()}";
echo "<br />";
$animanga2->setDiscount(70);
echo "Rp{$animanga2->getPrice()}";

?>