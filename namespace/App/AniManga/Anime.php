<?php namespace App\AniManga;
class Anime extends AniManga implements infoSeries {
   public $studio,
         $eps;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $studio = "Studio", $eps = 0, $price = 0) {
      parent::__construct($title, $author, $released, $price);
      $this->studio = $studio;
      $this->eps = $eps;
   }
   
   public function getInfo() {
      $str = "{$this->getLabel()} | {$this->released} | Rp{$this->price}";
      return $str;
   }

   public function getFullInfo() {
      $str = "Anime : " . $this->getInfo() . " | {$this->studio} | {$this->eps} Eps";
      return $str;
   }
}
?>