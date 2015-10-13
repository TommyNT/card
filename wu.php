<table border=1 >
<?php
include "haslo.php";
$con=pg_connect("host=sbazy user=s181169 dbname=s181169 password=$h");
$s="SELECT * FROM studenci";
$r=pg_exec($con, $s);
$lw=pg_numrows($r);
$lk=pg_numfields($r);

for($i=0;$i<$lk;$i++)

 print "<th>".pg_field_name($r,$i);

for($j=0;$j<$lw;$j++)
{
  print "<tr>";
  for($i=0;$i<$lk; $i++)
    print "<td>".pg_result($r, $j,$i);
}
?>
</table>