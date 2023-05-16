<?php
$values = [2,3,1];

$outPut = [];


for($i=0;$i<count($values);$i++){
    if($values[$i] >= $values[$i + 1]){
        array_push($outPut,$values[$i]);
    }else{
        $a = $values[$i];
        $b = $values[$i +1];
        $values[$i] = $b;
        $values[$i + 1] = $a;

    }
    array_push($outPut,$values);
}
print_r($outPut);

?>
