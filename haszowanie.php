<?php
/*md5         32
sha1          40
sha256        64
sha384        96
sha512       128
 sprawdź:http://hashtoolkit.com/reverse-hash?hash=f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0
Do ćwiczeń utwórz bazę danych o nazwie szfr z tabelą dane_szyf (pola tabeli: login, haslo)
*/
echo'<form action="haszowanie.php" method="POST">
    <input type="text" name="a1">
    <input type="password" name="a2">
    <input type ="submit" name="koduj" value ="KODUJ">
    </form>';
    if(isset($_POST['koduj']))
    {
      $log1=$_POST['a1'];
      $has1=$_POST['a2'];
      $log=md5($log1);
      $has=md5($has1);
  //wyświetlenie zahaszowanego loginu i hasła
  echo 'login pobrany <strong>: '.$log1.' </strong> login zahaszowany md5: '.$log.'<br />';
  echo 'hasło pobrane <strong>: '.$has1.' </strong> hasło zahaszowany md5: '.$has.'<br /><br />';
//wyświetlenie wartości innych systemów haszujących dla pobranego hasła

  echo 'hasło pobrane <strong>: '.$has1.' </strong> hasło zahaszowane sha1: '.sha1($has1).'<br/>';
   echo 'hasło pobrane <strong>: '.$has1.' </strong> hasło zahaszowane sha256: '.hash('sha256', $has1).'<br/>';
   echo 'hasło pobrane <strong>: '.$has1.' </strong> hasło zahaszowane sha384: '.hash('sha384', $has1).'<br/>';
  echo 'hasło pobrane <strong>: '.$has1.' </strong> hasło zahaszowane sha512: '.hash('sha512', $has1).'<br/><br />';


// wpisanie do bazy
$polacz= new mysqli('localhost','root','','szyfr');
$wpisz = $polacz->query("INSERT INTO dane_szyf SET login='$log', haslo='$has'");
if($wpisz)
echo"dane wpisane <br /><br />";

// haszowanie funkcją   password_hash
  $ciag1=password_hash($has1,PASSWORD_DEFAULT);//Algorytm szyfrujący: PASSWORD_DEFAULT lub PASSWORD_BCRYPT


  // weryfikacja hasła password_verify() -  zwraca true lub false
   if(password_verify($has1,$ciag1)){
            echo 'hasło zahaszowane: '.$ciag1.'<br />';
            echo " <strong>Weryfikacja: ciągi są takie same</strong> <br /><br />";
      }


// Sprawdzenie ilu urzytkowników podało to samo hasło i login w tabeli adane_szyf:

      $pobierz=$polacz->query("SELECT * FROM dane_szyf ");
$jest=0;

          while($rekord = $pobierz ->fetch_assoc()) {

                  if($rekord['login']==$log && $rekord['haslo']==$has)
                         $jest++;
                 }
          if($jest>0)
              echo "liczba urzytkowników: ".$jest."<br />";
           else
             echo "urzytkownik nie istnieje";

 //zamknięcie połączenia z bazą danych;
     mysqli_close($polacz);


}
 ?>
