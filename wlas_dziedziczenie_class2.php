
<?php
//Ćwiczenie 3. 

echo '<html><head></head><body>';
require("class_dz2.php"); // podłączenie pliku class_dz2.php 

echo '<br /><strong>OBIEKT:  dz  - KLASA: dziadek</strong><br />';
$dz = new dziadek();
$dz->informacje1();
echo '<br /><strong>OBIEKT oj - KLASA: ojciec  KORZYSTAJĄCY Z WŁASNOŚCI KLASY dziadek</strong><br />';
$oj = new ojciec();
$oj->informacje2();
echo '<br /><strong>OBIEKT sy - KLASA: syn KORZYSTAJĄCY Z WŁASNOŚCI KLASY ojciec i dziadek</strong><br />';
$sy = new syn();
$sy->informacje3();
//polecenie: wywołaj metodę informacje1() i informacje2() na obiekcie sy, 
// 			metodę informacje2() i informacje3() na obiekcie dz oraz 
//			metodę informacje1() i informacje3() na obiekcie oj - wnioski zapisz w zeszycie
echo '</body></html>';

/*
w pliku class_dz2.php zapisz:
<?php
 class  dziadek{
	private $imie='Tomasz' ;
	protected $wzrost=178;
	protected $waga =100;
	
		public function informacje1(){ 
			echo "Jestem z rodu PIASTÓW <br />";
			echo "imię: ".$this->imie."<br />";
			echo "wzrost: ".$this->wzrost."<br />";
			echo "waga: ".$this->waga."<br />";
			}
	}

 class  ojciec extends dziadek{
	private $imie='Adam' ;
	protected $oczy='zielone';
		public function informacje2(){ 
		echo "Jestem drugim pokoleniem  rodu PIASTÓW  <br />";
			echo "imię: ".$this->imie."<br />";
			echo "Kolor oczu: ".$this->oczy."<br />";
			echo " Mam wzrost po dziadku: ".$this->wzrost."<br />";
			echo " Mam wagę po dziadku: ".$this->waga."<br />";
		}
	}
 class  syn extends ojciec{
	private $imie='Paweł' ;
	public $kol_wl='rudy';
		public function informacje3(){
			echo "Jestem trzecim pokoleniem  rodu PIASTÓW  <br />";			
			echo "imię: ".$this->imie."<br />";
			echo "Kolor włosów: ".$this->kol_wl."<br />";
			echo "Mam wzrost po dziadku  : ".$this->wzrost."<br />";
			echo " Mam wagę po dziadku: ".$this->waga."<br />";
			echo "Kolor oczu po ojcu: ".$this->oczy."<br />";
		}
	}
?>
*/


?>
