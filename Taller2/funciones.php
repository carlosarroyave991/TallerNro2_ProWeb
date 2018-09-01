<?php

$numero1= $_POST['numero1'];
$numero2=  $_POST['numero2'];
$operacion=  $_POST['Operacion'];


switch($operacion){
        case '+';
        suma($numero1,$numero2);
        // echo suma($numero1,$numero2);
        break;
        case '-';
        resta($numero1,$numero2);
        break;
        case '*';
        multiplicacion($numero1,$numero2);
        break;
        case '/';
        division($numero1,$numero2);
        break;
    case '%':
        porcentaje($numero1,$numero2);
        break;
    case '^':
        potencia($numero1,$numero2);
        break;
    case '~':
        raiz($numero1, $numero2);
        break;
    case '!':
        logaritmo($numero1, $numero2);
        break;
    default:
        echo "no es una operacion valida.";
}


function suma ($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    echo "{$numero1} + {$numero2} = {$resultado}";
    echo "\n";
   /*echo "<br>"
    $numeros =range(0,10);
    var_dump($numeros);
    echo "<br>";*/
    var_dump($resultado);
}
function resta ($numero1, $numero2){
    $resultado = $numero1 - $numero2;
    echo "{$numero1} - {$numero2} = {$resultado}";
}
function multiplicacion ($numero1, $numero2){
    $resultado = $numero1 * $numero2;
    echo "{$numero1} * {$numero2} = {$resultado}";
}
function division ($numero1, $numero2){
    $resultado = $numero1 / $numero2;
    echo "{$numero1} / {$numero2} = {$resultado}";
}
function porcentaje($numero1, $numero2){
    $resultado = $numero1 / $numero2;
    echo "{$numero1} / {$numero2} = {$resultado}";
    echo "<br>";
         $resul = $resultado*100;
    echo "{$resultado} * 100 = {$resul}";
}
function potencia($numero1, $numero2){
    $resultado=pow($numero1,$numero2);
    echo "{$numero1} ^ {$numero2} = {$resultado}";
    
}
function raiz($numero1,$numero2){
    echo "la raiz de {$numero1} es ".sqrt($numero1);
    echo "<br>La raiz de {$numero2} es ".sqrt($numero2);
}
function logaritmo($numero1,$numero2){
    echo "El logaritmo de {$numero1} es ".log($numero1);
    echo "<br>El logaritmo de {$numero2} es ".log($numero2);
}

?>