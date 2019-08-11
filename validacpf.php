<?php
    function validateCpf($cpf){
        $val1 = 0;
        $val2 = 0;

        $y = 10;
        $x = -1;
        while ($x != 8) {
            $x++;
            $val1 = $val1+$cpf[$x]*($y);
            $y = $y-1;
        }

        $val1 = $val1%11;

        if($val1 >= 2){
            $prim = 11-$val1;
        }else{
            $prim = 0;
        }

        $y = 11;
        $x = -1;
        while($x != 8){
            $x++;
            $val2 = $val2+$cpf[$x]*($y);
            $y = $y-1;
        }

        $val2 = $val2+($prim*2);
        $val2 = $val2%11;

        if($val2 >= 2){
            $segun = 11-$val2;
        }else{
            $segun = 0;
        }
            
        if ($prim == $cpf[9] and $segun == $cpf[10]) {
            return true;
        }else {
            return false;
        }
    }