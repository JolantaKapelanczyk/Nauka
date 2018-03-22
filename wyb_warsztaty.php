<?php
//Do ćwiczeń utwórz bazę danych o nazwie pole_wyb z tabelą warsztaty (pola tabeli: Warsztat_1,Warsztat_2,...,Warsztat_5 )
echo '<html><head><meta charset="utf-8"></head><body>';
echo '<form action ="#" method = "POST">
		 <input type="checkbox" name="w1" />Warsztaty 1<br /><br />
		 <input type="checkbox" name="w2"  />Warsztaty 2<br /><br />
		 <input type="checkbox" name="w3"  />Warsztaty 3<br /><br />
		 <input type="checkbox" name="w4" />Warsztaty 4<br /><br />
		 <input type="checkbox" name="w5"  />Warsztaty 5<br /><br />
    <input type="submit" value="Zapisz" name="zapisz"/>
	</form>';

 if(isset($_POST['zapisz']))
 {
	  if(isset($_POST['w1'])){
		$w1="Wybrałeś warsztatu 1";
		echo $w1."<br />";}
	  else{
			$w1="Nie wybrałeś warsztatu 1";
  		echo $w1."<br />";
	 }
	  //lub
	  if (!empty($_POST['w2'])==true)
		{
			$w2="Wybrałeś warsztat 2";
			echo $w2."<br />";
		}
		else{
			$w2="Nie wybrałeś warsztatu 2";
  		echo $w2."<br />";
	 }
	//dla pozostałych analogicznie
	if (!empty($_POST['w3'])==true)
		{
			$w3="Wybrałeś warsztat 3";
			echo $w3."<br />";
		}
		else{
			$w3="Nie wybrałeś warsztatu 3";
  		echo $w3."<br />";
	 }

		if (!empty($_POST['w4'])==true)
		{
			$w4="Wybrałeś warsztat 4";
			echo $w4."<br />";
		}
		else{
			$w4="Nie wybrałeś warsztatu 4";
  		echo $w4."<br />";
	 }

		if (!empty($_POST['w5'])==true)
		{
			$w5="Wybrałeś warsztat 5";
			echo $w5."<br />";
		}
		else{
			$w5="Nie wybrałeś warsztatu 5";
  		echo $w5."<br />";
	 }

 $polaczenie=new mysqli('localhost','root','','pole_wyb');
   // kodowanie  polskich znaków w bazie danych
 $polaczenie-> query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
 //lub: $db -> query("SET NAMES 'utf8'");
 $zapis=$polaczenie->query("INSERT INTO warsztaty SET Warsztat_1='$w1',Warsztat_2='$w2',Warsztat_3='$w3',Warsztat_4='$w4',Warsztat_5='$w5'");
 
}
 echo '</body></html>';
?>
