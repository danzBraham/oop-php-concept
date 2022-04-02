<?php 

class AniManga {
   public $title,
         $author,
         $released;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx") {
      $this->title = $title;
      $this->author = $author;
      $this->released = $released;
   }

   public function getLabel() {
      return "$this->title | $this->author";
   }

   public function getFullInfo() {
      $str = "{$this->getLabel()} | {$this->released}";
      return $str;
   }

}

class Anime extends AniManga {
   public $studio,
         $eps;

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $studio = "Studio", $eps = 0) {
      parent::__construct($title, $author, $released);
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

   public function __construct($title = "Title", $author = "Author", $released = "19xx/20xx", $chapt = 0) {
      parent::__construct($title, $author, $released);
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

// Anime : Hunter x Hunter | Yoshihiro Togashi | Madhouse | 148 eps
$animanga1 = new Anime("Hunter x Hunter", "Yoshihiro Togashi", "Madhouse", "2 Oct 2011", 148);
// Manga : Berserk | Miura Kentarou | 380 Chapters
$animanga2 = new Manga("Berserk", "Miura Kentarou", "25 Aug 1989", 380);

echo $animanga1->getFullInfo();
echo "<br />";
echo $animanga2->getFullInfo();

?>