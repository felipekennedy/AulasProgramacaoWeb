<?php
header('Content-Type: text/html; charset=utf-8');
$preco = 50;

if ($preco >= 20){
    echo "Não posso comprar!";
}else{
    echo "Posso comprar!";
}

$nota = 9.5;

echo '</br>';

if($nota >= 7){
    echo 'aprovado!';
}else if($nota >= 4 && $nota <7){
echo "recuperação!";
}else{
echo "reprovado!";
}

echo '</br>';
$contador = 1;
while ($contador <= 10){
echo $contador ++;
echo '</br>';
}


for ($i = 11 ; $i <51; $i++){
    echo $i;
    echo '</br>';
}


?>