<?php 
class Manga extends AniManga implements infoSeries {
   public $chapt;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $chapt = 0, $price = 0) {
      parent::__construct($title, $author, $released, $price);
      $this->chapt = $chapt;
   }
   
   public function getInfo() {
      $str = "{$this->getLabel()} | {$this->released} | Rp{$this->price}";
      return $str;
   }

   public function getFullInfo() {
      $str = "Manga : " . $this->getInfo() . " | {$this->chapt} Chapters";
      return $str;
   }
}
?>