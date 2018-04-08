
<?php
echo '<html><head></head><body>';
//Przykładowe zastosowanie zmiennych statycznych: licznik obiektów
 class  uczen{
	private static $nr=0;// Uwaga! zmienne statyczne jako wartości nie mogą przyjmować działań np.: $nr=1+2, $nr=sqrt(9),$nr=PI();
						// Sprawdź: $nr=0.34, $nr="a",$nr="abe".
     public function __construct(){ 
		self::$nr++;
	   }
	 public static function pokaz_1(){
		echo  " uczeń  nr = ".self::$nr."<br />";
		}
}
uczen::pokaz_1();// odwołanie instancji klasy bezpośrednio do metody 
echo "<br />";

$uczen1=new uczen();
$uczen1->pokaz_1();

echo "<br />";
$uczen2=new uczen();
$uczen2->pokaz_1();

echo '</body></html>';
?>