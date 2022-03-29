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
      return "$this->title, $this->author";
   }
}

class AnimeInfo {
   public function print (Anime $anime) {
      $info = "Anime Information : {$anime->title} | {$anime->author} | {$anime->studio}";
      return $info;
   }
}

$anime1 = new Anime("One Piece", "Eiichiro Oda");
$anime2 = new Anime("Gintama", "Hideaki Sorachi");
$anime3 = new Anime("JoJo", "Hirohiko Araki");
$anime4 = new Anime("Shingeki no Kyojin", "Hajime Isayama", "Wit Studio & MAPPA");

echo "Anime : " . $anime1->getLabel();
echo "<br />";
echo "Anime : " . $anime2->getLabel();
echo "<br />";
echo "Anime : " . $anime3->getLabel();
echo "<br />";
echo "Anime : " . $anime4->getLabel();
echo "<hr />";

$animeInfo1 = new AnimeInfo();
$animeInfo2 = new AnimeInfo();
$animeInfo3 = new AnimeInfo();
$animeInfo4 = new AnimeInfo();

echo $animeInfo1->print($anime1);
echo "<br />";
echo $animeInfo2->print($anime2);
echo "<br />";
echo $animeInfo3->print($anime3);
echo "<br />";
echo $animeInfo4->print($anime4);

?>