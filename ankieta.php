Wybierz ulubiona marke samochodu (mozna oddac glos na wiecej niz jedna opcje):<br>
<form method='post' action='ankieta2.php'>
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s181169 user=s181169 password=$h");
$query="SELECT marka FROM ankieta ORDER BY marka";
$result=pg_exec($con,$query);
for ($i=0;$i<pg_numrows($result);$i++)
{
$opcjaX=pg_result($result,$i,0);
print("<select name='marka' size='2' multiple>");
print("<option value='$opcjaX' />$opcjaX<br>");
print("</select>");
/*print("<input type=radio name='glos' value='$opcjaX'>$opcjaX<BR>");*/
}
?>
<br>
<input type="submit" value="Glosuj">
</form>
