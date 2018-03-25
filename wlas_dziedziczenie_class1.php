
<?php
//Ćwiczenie 2. 

echo '<html><head></head><body>';
require("class_dz.php"); // podłączenie pliku class_dz.php 
// class  wyswiet1
echo '<br /><strong>OBIEKT  UCZEN 1 - KLASA: uczen</strong><br />';

$uczen1 = new uczen();
$uczen1->informacje1();


// class  uczen_szczegolowo2
echo '<br /><strong>OBIEKT UCZEN 2 - KLASA: uczen_szczegolowo  KORZYSTAJĄCY Z WŁASNOŚCI KLASY uczen</strong><br />';
$uczen2 = new uczen_szczegolowo();
$uczen2->informacje2();
echo '<br /><strong>OBIEKT UCZEN 2 - KLASA: uczen_szczegolowo KORZYSTAJĄCY Z METODY KLASY uczen</strong><br />';
$uczen2->informacje1();


echo '</body></html>';

/*
w pliku class_dz.php zapisz:
<?php
 class  uczen{
	private $imie='Ela' ;
	protected $wzrost=178;
	public $waga =67;

		public function informacje1(){ 
			echo "imię: ".$this->imie."<br />";
			echo "wzrost: ".$this->wzrost."<br />";
			echo "waga: ".$this->waga."<br />";
			}
	}

 class  uczen_szczegolowo extends uczen{
	private $imie='Tomek' ;
		public function informacje2(){ 
			echo "imię: ".$this->imie."<br />";
			echo "wzrost: ".$this->wzrost."<br />";
			echo "waga: ".$this->waga."<br />";
			
		}
	}
?>
*/


?>
