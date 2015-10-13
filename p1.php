<?php

$connection=pg_connect("host=sbazy dbname=s181169 user=s181169 password=MnAiTX3E");
$query="SELECT id_studenta, nazwisko FROM studenci";
$result=pg_exec($connection, $query);
$student=pg_result($result, 4, 1);

print "<input type='text' name='nazwisko' value=\"$student\"/>";





?>