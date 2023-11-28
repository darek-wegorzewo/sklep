
<?php

require_once('connect.php');

$polaczenie = mysqli_connect($server, $user, $password, $database);

if(!$polaczenie)
  {
  die("Blad polaczenia");
  }
  
  else
  {
$zapytanie =  "select nazwa, adres from dostawcy";	  
	  
$wynik = mysqli_query($polaczenie, $zapytanie); 
/*
echo "Ilosc wierszy zwracanych: ".mysqli_num_rows($wynik)."</br>";
echo "Ilosc kolumn zwracanych: ".mysqli_num_fields($wynik)."</br><hr>";
*/

while($tablica= mysqli_fetch_row($wynik)) 
	
	{
	echo $tablica[1]."</br>";
	}
	
	mysqli_close($polaczenie);  
  }

/*


  
	
 else
 {	
	$zapytanie = "SELECT nazwa FROM towary where promocja = 1";
	$wynik = mysqli_query($polaczenie, $zapytanie);

	echo "<ul>";

		{
			echo "<li>".$tablica[0]."  </li>";		
		}
		echo "</ul>";
	echo "<hr>";

	$zapytanie = "SELECT cena FROM towary where nazwa = 'cienkopis'";
		$wynik = mysqli_query($polaczenie, $zapytanie);
	echo "<ul>";
	while($tablica= mysqli_fetch_row($wynik))
		{
			echo "<li>".$tablica[0]."  </li>";
			
		}
		echo "</ul>";
	echo "<hr>";

		$zapytanie = "SELECT dostawcy.nazwa, COUNT(towary.id) as ilosc FROM dostawcy, towary WHERE dostawcy.id = towary.idDostawcy GROUP BY dostawcy.nazwa";
		$wynik = mysqli_query($polaczenie, $zapytanie);

	echo "<ul>";
	while($tablica= mysqli_fetch_row($wynik))
		{
			echo "<li>".$tablica[0]." ".$tablica[1]." </li>";
		}
		echo "</ul>";
	echo "<hr>";

 }
 */
?>