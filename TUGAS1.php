<?php
libxml_use_internal_errors(true);
libxml_clear_errors();
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.tempo.co/read/news/2014/04/20/083571822/Atasi-Amblesan-Tanah-DKI-Mau-Bangun-Tanggul-Laut");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div/div/div[5]/div/div[2]/div/div[5]/p[2]");
foreach ($judul as $jdl) {
    echo $jdl->nodeValue;

};
echo "<br/><br/>";
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.tempo.co/read/news/2014/05/06/064575884/Omset-Bakso-Babi-Sutiman-Rp-30-Juta-per-Bulan");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div/div/div[5]/div/div[2]/div/h1");
foreach ($judul as $jdl) {
    echo $jdl->nodeValue;

};
echo "<br/>";
$dom = new DomDocument;
$dom->loadHTMLFile("http://www.tempo.co/read/news/2014/05/06/064575884/Omset-Bakso-Babi-Sutiman-Rp-30-Juta-per-Bulan");
$xpath = new DomXPath($dom);
$judul = $xpath->query("/html/body/div/div/div[5]/div/div[2]/div/div[5]/p[2]");
foreach ($judul as $jdl) {
    echo $jdl->nodeValue;

}

?>
