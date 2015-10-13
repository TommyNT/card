<?php

$connection=pg_connect("host=sbazy dbname=s181169 user=s181169 password=MnAiTX3E");


$query="select id_pracownika, nazwisko, imie, katedra from pracownicy left join wykladowcy on id_pracownika=id_wykladowcy";

$pytanie = pg_exec($connection, $query);

$id = $_POST[id];


$zmiana=pg_result($pytanie, $id, 1);

$file=fopen("dokumenty/dane.txt", "a");

fwrite($file, "Nazwisko: ".pg_result($pytanie, $id, 1));
fwrite($file, "\nImie: ".pg_result($pytanie, $id, 2));
fwrite($file, "\nKatedra: ".pg_result($pytanie, $id, 3));


fclose($file);

print "Plik został poprawnie utworzony";






?>




