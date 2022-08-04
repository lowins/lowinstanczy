<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>

<body>
    <?php

$imie=$_POST['imie'];
$nazw=$_POST['nazwisko'];
$kl=$_POST['klasa'];
$wiek=$_POST['wiek'];

@$db=new mysqli('localhost','root','','klasa4');

if (mysqli_connect_errno())
{echo "Wystąpił błąd. Połączenie nie zostało nawiązane";}
else {echo "Połączeniu udane";}

$zapytanie= "insert into uczniowie (imie, nazwisko, klasa, wiek) values ('$imie', '$nazw', '$kl', '$wiek' )";

$wynik=$db->query($zapytanie);

if (!$wynik) {echo 'Dane nie zostały zapisane';}
else {echo 'Hurra!. Dane zapisane.';}

$db->close();


?>
    <form action="index.html">
        <input type="submit" value="powrót">
    </form>
    <form action="skrypt2.php">
        <input type="submit" value="wyswietl">
    </form>
</body>

</html>
