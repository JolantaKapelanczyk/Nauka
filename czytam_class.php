
<?php
//Ćwiczenie 1. 

echo '<html><head></head><body>';
require("class.php"); // podłączenie pliku class.php /lub include("nazwa pliku")
// class  wyswiet1
echo '<br /><strong>OBIEKT 1</strong><br />';
$napis1 = new wyswietl();
$napis1->podaj_imie();
$napis1->wys_imie();

// class  wyswiet2

echo '<br /><strong>OBIEKT 2</strong><br />';
$napis2 = new wyswiet2();
$napis2->podaj_imie('Tomek');
$napis2->wys_imie();


echo '</body></html>';

/*
w pliku class.php zapisz:
<?php
 class  wyswietl{
var $imie='Ania' ;
    function podaj_imie(){ 
	$this->imie='Danuta';
	}
	function wys_imie(){
		echo "Cześć nazywam się ".$this->imie;
		}
}

 class  wyswiet2{
var $imie='Ania' ;
    function podaj_imie($wyraz){   //  metoda z parametrem
	$this->imie=$wyraz; // przekazanie wartości wewnątrz metody
	}
	function wys_imie(){
		echo "Cześć nazywam się ".$this->imie;
		}
}
?>
*/


?>
