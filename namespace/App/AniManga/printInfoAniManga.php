<?php namespace App\AniManga;
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
?>