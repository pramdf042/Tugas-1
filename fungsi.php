<?php
//pembuatan fungsi
function segitiga($alas, $tinggi)
{
   return 0.5*$alas*$tinggi;
}
//pemanggilan fungsi
echo "Luas 1 = ".segitiga(7,8)."cm";
echo "<br />";
echo "Luas 2 = ".segitiga(14,8)."cm";
echo "<br />";
echo "Luas 3 = ".segitiga(4,5)."cm";
?>