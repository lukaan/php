<?php
$prova1 = 2;
$prova2 = 1;

$nota = ($prova1 + $prova2) / 2; 

if ($nota < 3){
    $desempenho = "Horrrrendo";

} elseif ($nota < 5) {
    $desempenho = "Ruinzinho";

} elseif ($nota < 7) {
    $desempenho = "Ta maro ou menos";
    
} elseif ($nota < 9 ){
    $desempenho = "Melhorou";

} else{
    $desempenho = "NICEEE";

}

echo ("Sua nota : ".$nota."\n".$desempenho);

$idade = 14;
$amigoDoDono = true;

if($idade >= 18) or ($amigoDoDono == true) { // tentei colocar o '||' e 'or' e n funfou entao seila
    echo ("Pode entrar!!");

} else {
    echo ("Vai dormir!!");]

}

?>
