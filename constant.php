<?php 
// ada 2 cara membuat constant

//define
define("NAME", "Zidan Abraham");
echo NAME;
echo "<br />";

// const
const NAMA = "Danzi Abraham";
echo NAMA;
echo "<br />";

// const bisa disimpan di dalam class
class Coba {
   const CLUB = "Liverpool Katos";
}

echo Coba::CLUB;
echo "<br />";

// Magic Constant :
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo __LINE__;
echo "<br />";
echo __FILE__;
echo "<br />";
echo __DIR__;
echo "<br />";

function coba() {
   return __FUNCTION__;
}

echo coba();
echo "<br />";

class Test {
   public $kelas = __CLASS__;
}

$obj = new Test();
echo $obj->kelas;

?>