<?php
$dzien = date('d');// d - dzień miesiąca, dwie cyfry z zerem na początku 01-31, 
$dzien_d = date('D');//D - dzień tygodnia, tekst, trzy litery
$miesiac = date('n');// n - miesiąc bez zera na początku, tzn. od „1” do „12”,
$rok = date('Y');//Y - rok, cztery liczby, np. „1999”, y- dwie liczby np "99"
$dzien_roku = date('z');//z – dzień roku, tzn. od „0” do „365”

$miesiac_pl = array(1 =>'stycznia', 2 =>'lutego', 3 =>'marca', 
4 =>'kwietnia', 5 =>'maja', 6 =>'czerwca', 7 =>'lipca', 
8 =>'sierpnia', 9 =>'września', 10=>'października', 
11 =>'listopada', 12 =>'grudnia');

$dzien_pl= array('Mon' =>'poniedziałku', 
'Tue' =>'wtorku', 'Wed' =>'środy', 
'Thu' =>'czwartku', 'Fri' =>'piątku', 
'Sat' =>'soboty', 'Sun' =>'niedzieli');

echo "Promocja aktualna do: " . $dzien_pl[$dzien_d].", 
".$dzien." ".$miesiac_pl[$miesiac]." ".$rok." roku";
echo '<br /><br /> Jest to '.$dzien_roku." dzień roku ".$rok;

 echo '<br /><br />';
 echo "Na potrzeby baz danych można zapisać:".$dzien.".".$miesiac.". ".$rok;

 //czas systemowy
 $godzina=date('H');// H- godzina, format 24-godzinny z zerem na początku, np. 00-23,
 $min=date('i');//minuty
 $sekundy=date('s');//sekundy
echo "<br /><br />Czas: ".$godzina.":".$min.":".$sekundy;

/*
Czas internetowy Swatcha,
https://www.swatch.com/pl_pl/internet-time/

*/



?>
