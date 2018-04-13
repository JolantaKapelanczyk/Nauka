
<?php
//Zadanie 1: Zbuduj klasę, która będzie posiadała:
//  - konstruktor z parametrem: konstruktor wyświetla informację o obliczaniu pola i obwodu:
//     -- trójkąta
//     -- prostokąta
//     -- koła
//   - 3 metody z parametrem służące do obliczania pola i obwodu figur:
//     -- trójkąta z 3 parametrami (parametrami są długości boków)
//     -- prostokąta z 2 parametrami 
//     -- koła z 1 parametrem (wyświetl wyniki z dokładnością do 3 miejsc po przecinku)

//ZAD 1. Przykładowe rozwiązanie: 

echo '<html><head></head><body>';
 class  figura{
		public function __construct($fig){
			if($fig=="tr")
				echo "Przystępuję do obliczania pola i obwodu trójkąta <br />";
			elseif($fig=="pr")
				echo "Przystępuję do obliczania pola i obwodu prostokąta<br />";
				elseif($fig=="ko")
					echo "Przystępuję do obliczania pola i obwodu koła<br />";
					else
						echo " zła nazwa figury";
		}
		public function tr($a,$b,$c){ 
			if($a+$b>$c && $a+$b>$c && $a+$b>$c)
			{
					$p=($a+$b+$c)/2;
					$pole=sqrt($p*($p-$a)*($p-$b)*($p-$c));
					$ob=$a+$b+$c;
					echo "pole = ".$pole." obwód  = ".$ob."<br /><br />";
			}
			else
				echo " Błąd danych";	
		}
		public function pro($a,$b){ 
			if($a>0&& $b>0)
			{
					$pole=$a*$b;
					$ob=2*$a+2*$b;
					echo "pole = ".$pole." obwód  = ".$ob."<br /><br />";
			}
			else
				echo " Błąd danych";	
		}
		function kol($a){ 
			if($a>0)
			{
					$pole=PI()*pow($a,2);
					$ob=2*M_PI*$a;
					echo "pole = ".round($pole,3)." obwód  = ".round($ob,3)."<br /><br />";
			}
			else
				echo " Błąd danych";	
		}	
}
$obiekt1 = new figura("tr");
$obiekt1->tr(3,4,5);
$obiekt2 = new figura("pr");
$obiekt2->pro(3,4);
$obiekt3 = new figura("ko");
$obiekt3->kol(2.5);

echo '</body></html>';

?>
