<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
 
</head>
<body>
<?php

@$db=new mysqli('localhost','root','','klasa4');

if (mysqli_connect_errno())
{echo "Wystąpił błąd. Połączenie nie zostało nawiązane";}
else {echo "Połączeniu udane";}

$zapytanie2= "SELECT ID,imie, nazwisko, klasa, wiek FROM uczniowie;";
$wysw = $db->query($zapytanie2);
echo "<table id='tabela'>
<tr><td>ID</td>
<td>Imie</td>
<td>Nazwisko</td>
<td>klasa</td>
<td>wiek</td></tr>";
while ($col = $wysw->fetch_assoc()) 
{
	echo "<tr><td>".$col['ID']."</td>
	<td>".$col['imie']."</td>
	<td>".$col['nazwisko']."</td>
	<td>".$col['klasa']."</td>
	<td>".$col['wiek']."</td></tr>";
}
echo "</table>";
$wysw->free();
$db->close();


?>
<form action="index.html">
	<input type="submit" value="powrót">
</form>
</body>
</html>