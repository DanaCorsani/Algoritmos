<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="g1.css">
</head>
<body>

    <h1>Algoritmos y Estructuras de Datos II</h1>
    <h2>Guia de ejercicios en PHP</h2>
    <h3>Paula Giaimo</h3>
    <h4>Primera parte:</h4>
    <p>6) Escribir el programa que me permita ingresar 2 numeros y elegir la operación a realizar (suma, resta,
    multiplicacion, division) y me muestre el resultado de la misma.</p><hr>

    <h4>Ingrese dos numeros separados por un espacio y seleccione la operación a realizar</h4>
    <table class="calculator" >
    <form method="POST">
        <tr class="calculator"><td class="calculator" colspan="4"><input type="text" name="numbers"><br><br></td></tr>
        <tr class="calculator"><td class="calculator">+<input type="radio" name="operator" value="addition"></td>
        <td class="calculator">-<input type="radio" name="operator" value="substraction"></td>
        <td class="calculator">x<input type="radio" name="operator" value="multiplication"></td>
        <td class="calculator">%<input type="radio" name="operator" value="division"></td></tr><br><br>
        <tr class="calculator"><td class="calculator" colspan="4"><input type="submit" value="Calcular"></td></tr>
    </form>
    
    <?php
    
        if(isset($_POST['numbers']) && isset($_POST['operator']) ){
            $twoN=explode(" ", $_POST['numbers']);
            $operator=$_POST['operator'];
            if(count($twoN)==2){
                echo"<tr class='calculator'><td class='calculator' colspan='4'>";
                switch($operator){
                    case "addition":
                        $twoN=$twoN[0]+$twoN[1];
                        echo "El resultado de su suma es: " . $twoN;
                        break;
                        case "substraction":
                            $twoN=$twoN[0]-$twoN[1];
                            echo "El resultado de su resta es: " . $twoN;
                            break;
                            case "multiplication":
                                $twoN=$twoN[0]*$twoN[1];
                                echo "El resultado de su multiplicacion es: " . $twoN;
                                break;
                                case "division":
                                    if($twoN[1]==0){
                                    echo "Lamentablemente, todavia no se descubrio el resultado de dividir por 0 ";
                                    break;
                                    }else{
                                        $twoN=$twoN[0]/$twoN[1];
                                        echo "El resultado de su division es: " . $twoN;
                                        break;
                                    }
                                    
                                    default:
                                    echo "Algo salio mal, por favor intente nuevamente.";
                }
                echo "</td></tr>";
            }else{
                echo "<tr class='calculator'><td class='calculator'>Por favor ingrese dos numeros.</tr></td>";
            }
        }

    ?>
    </table>

</body>
</html>