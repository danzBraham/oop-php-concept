<?php 

// cara sederhana
// require_once "AniManga/infoSeries.php";
// require_once "AniManga/AniManga.php";
// require_once "AniManga/Anime.php";
// require_once "AniManga/Manga.php";
// require_once "AniManga/printInfoAniManga.php";
// require_once "AniManga/User.php";

// require_once "Review/User.php";

// cara autoloading
spl_autoload_register(function($class){
   $class = explode("\\", $class);
   $class = end($class);
   require_once __DIR__ . "/AniManga/" . $class . ".php";
});

spl_autoload_register(function($class){
   $class = explode("\\", $class);
   $class = end($class);
   require_once __DIR__ . "/Review/" . $class . ".php";
});

?>