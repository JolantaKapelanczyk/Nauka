<?php

class osoba {
	public $imie;
	public $nazwisko;
	public $klasa;
	public $wzrost;
	
	public function __construct($imie, $nazwisko, $klasa, $wzrost){
		$this->imie=$imie;
		$this->nazwisko=$nazwisko;
		$this->klasa=$klasa;
		$this->wzrost=$wzrost;
	}	
}

$uczen1= new osoba("Katarzyna", "Struga","1B",170);

echo "Imię: ".$uczen1->imie.'<br />';
echo "Nazwisko: ".$uczen1->nazwisko.'<br />';
echo "Klasa: ".$uczen1->klasa.'<br />';
echo "Wzrost: ".$uczen1->wzrost.'<br />';
echo "<br />";
// wyświetlenie w pętli
foreach ($uczen1 as $wartosc)
        echo $wartosc." ";

?>