<?php

$nombre1= $_POST['nombre1'];
$nit1=  $_POST['nit1'];
$diax1=  $_POST['diax1'];
$salariof1= $_POST['salariof1'];
$pension1= $_POST['pension1'];

$nombre2= $_POST['nombre2'];
$nit2= $_POST['nit2'];
$diax2= $_POST['diax2'];
$salariof2= $_POST['salariof2'];
$pension2= $_POST['pension2'];

$nombre3= $_POST['nombre3'];
$nit3= $_POST['nit3'];
$diax3= $_POST['diax3'];
$salariof3= $_POST['salariof3'];
$pension3= $_POST['pension3'];


//empleado1($nombre1,nit1,diax1,salariof1);
$dia1=$salariof1/30;
$total1=$dia1*$diax1;
echo "El empleado {$nombre1} con el NIT {$nit1} se le paga mensualmente un salario de {$salariof1}, y por cada dias extra se le pagara {$dia1}.<br>El total de salario mas los dias extra es de {$total1}.<br> Tambien se le da un auxilio de transporte, sus vacaciones empiezan en julio 3 y terminan en agosto 24, tambien tiene derecho a prima y cesantias(por las cesantias solo se le cobra un %10).<br>Su estado de pension es {$pension1}";

echo "<br><br>";
$dia2=$salariof2/30;
$total2=$dia2*$diax2;
echo "El empleado {$nombre2} con el NIT {$nit2} se le paga mensualmente un salario de {$salariof2}, y por cada dias extra se le pagara {$dia2}.<br> El total de salario mas los dias extra es de {$total2}.<br>Tambien se le da un auxilio de transporte, sus vacaciones empiezan en julio 3 y terminan en agosto 24, tambien tiene derecho a prima y cesantias(por las cesantias solo se le cobra un %10).<br>Su estado de pension es {$pension2}";
echo "<br><br>";

$dia3=$salariof3/30;
$total3=$dia3*$diax3;
echo "El empleado {$nombre3} con el NIT {$nit3} se le paga mensualmente un salario de {$salariof3}, y por cada dias extra se le pagara {$dia3}.<br>El total de salario mas los dias extra es de {$total3}.<br>Tambien se le da un auxilio de transporte, sus vacaciones empiezan en julio 3 y terminan en agosto 24, tambien tiene derecho a prima y cesantias(por las cesantias solo se le cobra un %10).<br>Su estado de pension es {$pension3}";
    

?>