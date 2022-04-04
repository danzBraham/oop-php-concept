<?php 

class AniManga {
   private $title,
         $author,
         $released,
         $price,
         $discount = 0;

   public function __construct($title = "Title", $author = "Author", $released = "date release", $price = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->released = $released;
      $this->price = $price;
   }

   public function setTitle($title) {
      $this->title = $title;
   }

   public function getTitle() {
      return $this->title;
   }

   public function setAuthor($author) {
      $this->author = $author;
   }

   public function getAuthor() {
      return $this->author;
   }

   public function setReleased($released) {
      $this->released = $released;
   }

   public function getReleased() {
      return $this->released;
   }

   public function setDiscount($discount) {
      $this->discount = $discount;
   }

   public function getDiscount() {
      return $this->discount;
   }

   public function setPrice($price) {
      $this->price = $price;
   }

   public function getPrice() {
      return "Rp" . $this->price - ($this->price * $this->discount / 100);
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
echo $animanga1->getPrice();
echo "<br />";
$animanga2->setDiscount(70);
echo $animanga2->getPrice();
echo "<hr />";

$animanga1->setAuthor("Zidan Abraham");
echo $animanga1->getAuthor();

?>