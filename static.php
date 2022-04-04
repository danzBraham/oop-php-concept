<?php 

// Static Keyword
// 1. Properti dan Method yang terikat dengan class, bukan dengan object
// 2. Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
// 3. Membuat kode menjadi 'procedural'
// 4. Biasanya digunakan untuk membuat fungsi bantuan/helper
// 5. Digunakan pada class-class utility pada Framework

class ContohStatic {
   public static $angka = 1;

   public static function halo() {
      return "Halo " . self::$angka++ . " kali. <br />";
   }
}

echo ContohStatic::$angka;
echo "<br />";
echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();
echo "<hr />";

// contoh nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
class ContohStatic2 {
   public static $angka = 1;

   public function halo(){
      return "Halo " . self::$angka++ . " kali. <br />";
   }
}

$obj = new ContohStatic2();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr />";

$obj2 = new ContohStatic2();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>