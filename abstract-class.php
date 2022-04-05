<?php 

abstract class AniManga {
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

   abstract public function getFullInfo();

   public function getInfo() {
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
      $str = "Anime : " . $this->getInfo() . " | {$this->studio} | {$this->eps} Eps";
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
      $str = "Manga : " . $this->getInfo() . " | {$this->chapt} Chapters";
      return $str;
   }
}

class printInfoAniManga {
   public $listAniManga = [];

   public function addAniManga(AniManga $animanga) {
      $this->listAniManga[] = $animanga;
   }

   public function print() {
      $info = "List Anime & Manga : <br />";

      foreach ($this->listAniManga as $am) {
         $info .= "- {$am->getFullInfo()} <br />";
      }

      return $info;
   }
}

// Anime : Hunter x Hunter | Yoshihiro Togashi | 2 Oct 2011 | Madhouse | 148 eps | Rp2.000.000
$animanga1 = new Anime("Hunter x Hunter", "Yoshihiro Togashi", "2 Oct 2011", "Madhouse", 148, 2000000);
// Manga : Berserk | Miura Kentarou | 25 Aug  1989 | 380 Chapters | Rp40.000
$animanga2 = new Manga("Berserk", "Miura Kentarou", "25 Aug 1989", 380, 40000);
$animanga3 = new Anime("Fullmetal Alchemist: Brotherhood", "hiromu Arakawa", "5 April 2009", "Bones", 64, 2000000);

$infoAniManga = new printInfoAniManga();

$infoAniManga->addAniManga($animanga1);
$infoAniManga->addAniManga($animanga2);
$infoAniManga->addAniManga($animanga3);

echo $infoAniManga->print();

?>