Liczba głosów oddanych na poszczególne marki:
<?php
include "haslo.php";
$con=pg_connect("host=sbazy dbname=s181169 user=s181169 password=$h");
$r=$_POST[glos];
$query="UPDATE ankieta set liczba_glosow=liczba_glosow+1 WHERE marka='$r'";
$result=pg_exec($con,$query);
$query1="SELECT * FROM ankieta ORDER BY marka";
$result1=pg_exec($con,$query1);
$rowsNo=pg_numrows($result1);
$fieldNo=pg_numfields($result1);
print("<TABLE border='1' frame='border' rules='all'>");
print("<TR>");
for ($row=0;$row<$rowsNo;$row++)
{
for ($field=0;$field<$fieldNo;$field++)
print "<TD>".pg_result($result1,$row,$field);
print ("<TR>");
}
print("</TABLE>");
?>
