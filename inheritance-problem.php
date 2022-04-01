<?php 

class AniManga {
   public $title,
         $author,
         $studio,
         $eps,
         $chapt,
         $type;

   public function __construct($title = "Title", $author = "Author", $studio = "Studio", $eps = 0, $chapt = 0, $type) {
      $this->title = $title;
      $this->author = $author;
      $this->studio = $studio;
      $this->eps = $eps;
      $this->chapt = $chapt;
      $this->type = $type;
   }

   public function getLabel() {
      return "$this->title | $this->author";
   }

   public function getFullInfo() {
      $str = " {$this->type} : {$this->getLabel()} | ";
      if ($this->type == "Anime") {
         // Anime : Hunter x Hunter | Yoshihiro Togashi | Madhouse | 148 eps
         $str .= "{$this->studio} | {$this->eps} eps";
      } else if ($this->type == "Manga") {
         // Manga : Berserk | Miura Kentarou | 380 Chapters
         $str .= "{$this->chapt} chapters";
      }

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
$animanga1 = new AniManga("Hunter x Hunter", "Yoshihiro Togashi", "Madhouse", 148, 0, "Anime");
// Manga : Berserk | Miura Kentarou | 380 Chapters
$animanga2 = new AniManga("Berserk", "Miura Kentarou", null, 0, 380, "Manga");

echo $animanga1->getFullInfo();
echo "<br />";
echo $animanga2->getFullInfo();

?>