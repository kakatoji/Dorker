<?php
error_reporting(0);
system("clear");
function search($cek){
header('Content-Type: application/json');
$file =file_get_contents("https://www.google.com/search?q=".urlencode($cek));
preg_match_all('/\/url\?q=(.*?)&amp/', $file, $hasil);
return $hasil;
}

print "=============================\n";
print "|        Dorker google      |\n";
print "=============================\n";
print "|          kakatoji         |\n";
print "=============================\n";
print "|       Indo Ghost Cyber    |\n";
print "=============================\n";
$cari=readline("[>]Input: ");
print "==============================\n";
$cek=search($cari);
$i=1;
foreach($cek[1] as $head){
  echo "[".$i++."] ".$head."\n";
}
