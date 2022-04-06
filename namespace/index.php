<?php 

require_once "App/init.php";

// $animanga1 = new Anime("Hunter x Hunter", "Yoshihiro Togashi", "2 Oct 2011", "Madhouse", 148, 2000000);
// $animanga2 = new Manga("Berserk", "Miura Kentarou", "25 Aug 1989", 380, 40000);
// $animanga3 = new Anime("Fullmetal Alchemist: Brotherhood", "hiromu Arakawa", "5 April 2009", "Bones", 64, 2000000);

// $infoAniManga = new printInfoAniManga();

// $infoAniManga->addAniManga($animanga1);
// $infoAniManga->addAniManga($animanga2);
// $infoAniManga->addAniManga($animanga3);

// echo $infoAniManga->print();

use App\AniManga\User as AniMangaUser;
use App\Review\User as ReviewUser;

new AniMangaUser();
echo "<br />";
new ReviewUser();

?>