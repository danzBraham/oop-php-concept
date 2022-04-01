<?php 

class AniManga {
   public $title,
         $author,
         $studio,
         $eps,
         $chapt;

   public function __construct($title = "Title", $author = "Author", $studio = "Studio", $eps = 0, $chapt = 0) {
      $this->title = $title;
      $this->author = $author;
      $this->studio = $studio;
      $this->eps = $eps;
      $this->chapt = $chapt;
   }

   public function getLabel() {
      return "$this->title | $this->author";
   }

   public function getFullInfo() {
      $str = "{$this->getLabel()} | ";
      return $str;
   }

}

class Anime extends AniManga {
   public function getFullInfo() {
      $str = "Anime : {$this->getLabel()} | {$this->studio} | {$this->eps} Eps";
      return $str;
   }
}

class Manga extends AniManga {
   public function getFullInfo() {
      $str = "Manga : {$this->getLabel()} | {$this->chapt} Chapters";
      return $str;
   }
}

class AnimeInfo {
   public function print (Anime $anime) {
      $info = "Anime Information : {$anime->title} | {$anime->author} | {$anime->studio}";
      return $info;
   }
}

// Anime : Hunter x Hunter | Yoshihiro Togashi | Madhouse | 148 eps
$animanga1 = new Anime("Hunter x Hunter", "Yoshihiro Togashi", "Madhouse", 148, 0);
// Manga : Berserk | Miura Kentarou | 380 Chapters
$animanga2 = new Manga("Berserk", "Miura Kentarou", null, 0, 380);

echo $animanga1->getFullInfo();
echo "<br />";
echo $animanga2->getFullInfo();

?>