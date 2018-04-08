
<?php
echo '<html><head></head><body>';
//Ćwiczenie: zbuduj obiekt uczen3 i uczen4. Wyświetl informacje o obiektach oraz wykonaj usunięcie obiektów w kolejności 1, 3, 4, 2. 
 class  uczen{
	public $wzrost =125 ;
	public $waga ;
	public $klasa ;
    public function __construct ($imie){ 
		$this->imie=$imie;
		echo "Witam wszystkich! <br /> szczególnie ".$this->imie." ";
	}
	 public function __destruct(){
		echo ' Żegnam  '.$this->imie.'<br />';
		}
}

echo '<br /><strong>OBIEKT 1</strong><br />';
$uczen1 = new uczen("Piotra");
$uczen1->wzrost+=50;
$uczen1->waga =58;
$uczen1->klasa="1A";
echo 'z klasy '.$uczen1->klasa.' <br />Dane - wzrost:'.$uczen1->wzrost.' cm, waga: '.$uczen1->waga.' kg. <br />';
//unset($uczen1);// niszczy obiekt $uczen1 

echo '<br /><strong>OBIEKT 2</strong><br />';
$uczen2 = new uczen("Marka");
$uczen2->wzrost+=100;
$uczen2->waga =48;
$uczen2->klasa="2B";
echo 'z klasy '.$uczen2->klasa.'<br />Dane - wzrost:'.$uczen2->wzrost.' cm, waga: '.$uczen2->waga.' kg. <br />';
echo '<br /><strong>Kolejność niszczenia obiektów: </strong><br />';


echo '</body></html>';
?>
