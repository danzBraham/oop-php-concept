<?php 
abstract class AniManga {
   protected $title,
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

   abstract public function getInfo();
}
?>