<?php 

class Anime {
   public $title,
         $author,
         $studio;

   public function __construct($title = "Title", $author = "Author", $studio = "Studio") {
      $this->title = $title;
      $this->author = $author;
      $this->studio = $studio;
   }

   public function getLabel() {
      return "$this->title, $this->author, $this->studio";
   }
}

$anime1 = new Anime("One Piece", "Eiichiro Oda", "Toei Animation");
$anime2 = new Anime("Gintama", "Hideaki Sorachi", "Bandai Namco");

echo "Anime : " . $anime1->getLabel();
echo "<br />";
echo "Anime : " . $anime2->getLabel();

?>