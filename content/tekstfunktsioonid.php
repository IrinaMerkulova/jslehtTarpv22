<h2>Tekstfunktsioonid</h2>
<?php
function clearVarsExcept($url, $varname) {
    //töötab php stormis index faili kaudu
    return strtok(basename($_SERVER['REQUEST_URI']),"?")."?$varname=".$_REQUEST[$varname];
    //töötab zone.ee serveris
    // return "?$varname=".$_REQUEST[$varname];
}

$tekst="November on viimane sygisekuu";
echo $tekst;
echo "<br>";

//kõik tähed väikesed
echo strtolower($tekst);
echo "<br>";

//kõik tähed on suured
echo strtoupper($tekst);
echo "<br>";

//iga sõna algab suure tähega
echo ucwords(strtolower($tekst));
echo "<br>";

//teksti pikkus
echo "Teksti pikkus on ".strlen($tekst);
echo "<br>";

//sõnade arv lauses
echo "Lauses on ".str_word_count($tekst)." sõnu";
echo "<br>";

//eralda lauses alates 3 kokku 5 tähte
echo substr($tekst, 2, 5); // esimene täht -0!
echo "<br>";
// tühiku asukoht
echo "Esimese tühiku asukoht on ".strpos($tekst, " ");
echo "<br>";
//eralda 1 sõna lauses

echo "Esimene sõna lauses on ".substr($tekst, 0, strpos($tekst, " "));
echo "<br>";
//näita kõik sõnad peale esimest
echo substr($tekst, strpos($tekst, " "), strlen($tekst)-strpos($tekst, " "));
//Mõistatus -->  загадка
//Euroopa riik
// 5-6 подсказок, при помощи текстовых функций
$riik="nimi";

echo "<ol>";
echo "<li>Riiginimi pikkus on ";
echo "</ol>";
?>
<strong>Kontroll:</strong>
<form name="kontroll" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"veebileht")?>" method='post'>
    <input type="text" name="kontroll">
    <input type="submit" value="ok">
</form>
<?php
if(isset($_REQUEST["kontroll"])){
    if($_REQUEST["kontroll"]==$riik){
        echo "Õige vastus";
        echo "<body style='background-color: green'>";
    } else{
        echo "vale vastus";
        echo "<body style='background-color: red'>";
    }
}

