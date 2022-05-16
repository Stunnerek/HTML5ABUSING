
    <?php
      $id = trim($_POST['id']);
      $imie = trim($_POST['imie']);
      $nazwisko = trim($_POST['nazwisko']);
      $pseudonim = trim($_POST['pseudonim']);
      if (!$id || !$imie || !$nazwisko || !$pseudonim)
      {
        echo 'Brak wszystkich danych, wróć do poprzedniej strony i spróbuj ponownie!';
        exit;
      }
     $db = new mysqli('localhost','root','','ston');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spróbuj ponownie';
        exit;
      }
      $zapytanie = "insert into formularz values ('".$id."', '".$imie."', '".$nazwisko."', '".$pseudonim."')";
      $wynik = $db->query($zapytanie);
      if ($wynik) echo 'Dodano: ' .$db->affected_rows. 'd '.$imie;
    ?> 
	<?php
	 $baza=new mysqli('localhost','root','','ston');
	if ($wynik=$baza->query('SELECT imie,nazwisko FROM klasa'))
	{
		echo "Lista czytelników: <br>\n";
		while($wiersz=$wynik->fetch_assoc())
		{
			echo $wiersz['imie'].' '.$wiersz['nazwisko'].'<br>';
		}
		
	}
	?>
        