
<?php
echo '<html><head></head><body>';
//klasa o nazwie wyswietl zdefiniowana w wewnątrz pliku z dwoma metodami 
 class  wyswietl{
var $imie='Ania' ;
    function podaj_imie(){ // metoda podaj_imie(bez parametru)
	$this->imie='Danuta';//przekazanie wartosci 'Danuta' do zmiennej imie za pomocą $this 
	}
	function wys_imie(){
		echo "Cześć nazywam się ".$this->imie;
		}
}
echo '<br /><strong>OBIEKT 1</strong><br />';
$napis1 = new wyswietl();//obiekt napis 1 zbudowany na bazie klasy wyswietl1
$napis1->podaj_imie();
$napis1->wys_imie();

//przykład 2

 class  wyswiet2{
var $imie='Ania' ;
    function podaj_imie($wyraz){   //  metoda z parametrem
	$this->imie=$wyraz; // przekazanie wartości wewnątrz metody
	}
	function wys_imie(){
		echo "Cześć nazywam się ".$this->imie;
		}
}
echo '<br /><strong>OBIEKT 2</strong><br />';
$napis2 = new wyswiet2();
$napis2->podaj_imie('Tomek');
$napis2->wys_imie();


echo '</body></html>';
?>
