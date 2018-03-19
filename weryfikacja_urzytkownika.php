<?php
/*
Do ćwiczeń utwórz bazę danych o nazwie user z tabelą  uzytkownik(pola tabeli: login, haslo)
*/
echo '<form action="weryfikacja_uzytkownika.php" method="POST">
      Login: <input type="text"  name="log"><br /><br />
	  Hasło: <input type="password" name ="has"><br /><br />
	  <input type ="submit" name="loguj" value="ZALOGUJ">
	  </form>';
	 
	 if(isset($_POST['loguj']))
	 {
        $log=$_POST['log'];
		$has=$_POST['has'];
		
		$pol=new mysqli('localhost','root','','user');

   
			$dane=$pol->query("SELECT * FROM  uzytkownik ");
           $status=0;
		   while( $ciag1=$dane->fetch_assoc())
		   {
			if($ciag1['login']==$log)
			{
				if(password_verify($has,$ciag1['haslo'])){
					echo 'uzytkownik istnieje w bazie danych <br />';
					echo "login: ".$ciag1['login'];	
					$status=1;
				}
			}	
		   }
			if($status==0)
			{
			$ciag2=password_hash($has,PASSWORD_DEFAULT);
			$wpisz = $pol->query("INSERT INTO uzytkownik SET login='$log', haslo='$ciag2'");
			echo 'uzytkownik dodany do bazy<br />'; 
			}
		   
        mysqli_close($pol);
	 } 
	



?>
