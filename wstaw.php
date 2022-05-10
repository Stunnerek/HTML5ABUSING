
    <?php
      $nr = trim($_POST['nr']);
      $imie = trim($_POST['imie']);
      $nazwisko = trim($_POST['nazwisko']);
      $grupa = trim($_POST['grupa']);
      if (!$nr || !$imie || !$nazwisko || !$grupa)
      {
        echo 'Brak wszystkich danych, wróć do poprzedniej strony i spóbuj ponownie!';
        exit;
      }
     $db = new mysqli('localhost','root','','klasa');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }
      $zapytanie = "insert into klasa values ('".$nr."', '".$imie."', '".$nazwisko."', '".$grupa."')";
      $wynik = $db->query($zapytanie);
      if ($wynik) echo 'Dodano: ' .$db->affected_rows. 'ucznia do klasy o imieniu: '.$imie;
    ?> 
	<?php
	 $baza=new mysqli('localhost','root','','klasa');
	if ($wynik=$baza->query('SELECT imie,nazwisko FROM klasa'))
	{
		echo "Lista czytelników: <br>\n";
		while($wiersz=$wynik->fetch_assoc())
		{
			echo $wiersz['imie'].' '.$wiersz['nazwisko'].'<br>';
		}
		
	}
	?>
        