<?php
function chuvihinhtron ($r)
{
    $chuvi = $r*$r*3.14;
    echo "Ket qua chu vi hinh tron la :";
    return $chuvi;

}
$r = 12;
$x=chuvihinhtron($r);
echo $x;

?>
