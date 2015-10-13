<?php
$con=pg_connect("host=sbazy user=s181169 dbname=s181169 password=MnAiTX3E");
$query = "insert into pracownicy (nazwisko, imie, nip, pesel)
values ('Wielowiejski', 'Tadeusz', '123-000-32-98', '90091212121')";
$result=pg_exec($con, $query);
print pg_affected_rows($result);
?>
