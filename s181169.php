<form method='post' action='zadanie1.php>

<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s181169 password=$h");
$query="SELECT id_pracownika,nazwisko FROM pracownicy";
$result=pg_exec($con,$query);
for ($i=0;$i<pg_numrows($result);$i++)
{
print ("Wpisz nazwe wykladu: <input type='text' name='nazwa_wykladu' size='30' />")<br>;
print ("Wpisz liczbe godzin: <input type='text' name='liczba_godzin' size='3'/ >")<br>;
}
?>

<input type="submit" value="Wyslij">
</form>

