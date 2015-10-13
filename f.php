<?php
function pole_figury ($r, $figura)
/*funkcja liczyb pole kola lub kwadratu*/
{
if ($figura=='kolo')
$pole=pi()*$r*$r;
else
if($figura=='kwadrat')
$pole=$r*$r;
else
$pole='brak lub bledny parametr funkcji';
return $pole;
}
$a=10;
print pole_figury($a, 'kolo');
?>
