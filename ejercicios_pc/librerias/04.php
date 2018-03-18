<?php
$cont=[0,0,0,0,0,0,0,0,0,0,0];
$cont_s = '';

for($i=1; $i < 10001; $i++){
    for($j=2; $j < 12; $j++){
        $x= rand(1,6);
        $y = rand(1,6);
        $z = $x + $y;
        
        if($z === $j){
            $cont[$j-2]++;
        }
    }
}
print_r($cont);
for($i=0; $i<count($cont); $i++){
    $cont_s = $cont_s . "El numero de " . (string) ($i+2) . " es " . $cont[$i] . PHP_EOL;
}

$filename = 'tiradas.txt';

$file = fopen($filename, 'w');
fwrite($file, $cont_s);
fclose($file); 
?>
