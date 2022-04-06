<?php 

// cara sederhana
// require_once "AniManga/infoSeries.php";
// require_once "AniManga/AniManga.php";
// require_once "AniManga/Anime.php";
// require_once "AniManga/Manga.php";
// require_once "AniManga/printInfoAniManga.php";

// cara autoloading
spl_autoload_register(function($class){
   require_once __DIR__ . "/AniManga/" . $class . ".php";
});

?>