<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
</head>
<body>
    <h2>Inciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = ' _myvar = hola';
        echo $_myvar;
        echo '<br>_myvar es correcta ya que las variables puden iniciar con un underscore <br>'; 
        $_7var = '_7var = 758';
        echo $_7var;
        echo '<br>_7var es correcta ya que las variables puden iniciar con un underscore <br>';
        //myvar = 'buenos dias';
        echo 'La variable "myvar" no es correcta ya que para poder distigurise como variable es necesario tener el $, si no no se marca como variable y nos arroja error <br>';
        $myvar = ' $myvar = 759';
        echo $myvar;
        echo '<br> La variable myvar si se considera variable ya que las variables puden inicializar en una letra<br>' ;
        $var7 = 'var7 = Septiembre<br>';
        echo $var7;
        echo 'La variable $var7 si es considerada una variabla por que inicia con una letra<br>';
        $_element1 = '_element1 = 96587<br>';
        echo $_element1;
        echo 'La variable _element1 si se considera valida ya que inicia con un underscore<br>';
        //$house*5 = 'Ejemplo variable';
        echo 'La variable house*5 no es valida ya que lleva un signo que se interpreta como una opreacion y no es valida como una variable<br>'
    ?>
    <h2>Inciso 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”; <br>
        $b = 'MySQL'; <br>
        $c = &$a;</p>
    <?php
        $a = "ManejeadorSQL";
        $b = 'MySQL';
        $c = &$a;
    ?>
    <p>a. Ahora muestra el contenido de cada variable (Primera seccion de asignacion de contenido)</p>
    <?php
        echo 'La variable a = ', $a;
        echo '<br>La variable b = ', $b;
        echo '<br>La variable c = ', $c;
    ?>
    <p>b. Agrega al código actual las siguientes asignaciones: (Segunda asignacion de contenido)<br>$a = “PHP server”; $b = &$a;</p>
    <?php
        $a = &$a;
        $a = "PHP server";
        $b = &$a; 
    ?>
    <p>c. Vuelve a mostrar el contenido de cada uno</p>
    <?php
        echo 'El nuevo valor de la variable a es = ', $a;
        echo '<br>El nuevo valor de la variable b es = ', $b;
    ?>
    <p>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</p>
    <p> Como podemos notar en la (Primera seccion de asignacion de contenido) de a,b,c se le atribuyen valores diferentes pero en la(Segunda asignacion de contenido) 
        se hace una modificacion a los valores qeu se le asignan en la (Primera seccion de asignacion de contenido), algo como sobrescribir valores de la (Segunda asignacion de contenido) a 
        los valores de la (Primera seccion de asignacion de contenido)</p>
    <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,verificar la evolución del tipo de estas variables 
        (imprime todos los componentes de los arreglo):</p>
    <p>$a = “PHP5”;<br>
        $z[] = &$a;<br>
        $b = “5a version de PHP”;<br>
        $c = $b*10;<br>
        $a .= $b;<br>
        $b *= $c;<br>
        $z[0] = “MySQL”;</p>

    <?php
        $a = "PH5";
        echo 'El contenido de la variable a = ', $a;
    ?>
    <?php
        $z[] = &$a;
        echo '<br>El contenido de la variable z =', var_dump($z);
    ?>
    <?php
        $b = "5a version de PHP";
        echo '<br> El contenido de la variable b = ', $b;
    ?>
    <?php
        //$c = $b*10;
        echo '<br>El contenido de la variable c nos arrojara una advertencia ya que dentro de la asignacion de contenido de la variable
                se hace el uso de una operacion la cual nos indica que se va a multiplicar el contenido de b*10, en este caso como el 
                contenido de b es un conjunto de caracteres y un numero el valor de c nos va a arrojar la multiplicacion de ese numero por 10
                Ejemplo 5*10, entonces el valor de c va a ser igual a 50.';
    ?>
    <?php
        $a .= $b;
        echo '<br>El valor de a = ',$a;
    ?>
    <?php
        //$b *= $c;
        echo '<br>El valor de b igualmente nos va a rrojar un error, ya que se hace el uso de un simbolo que representa una operacon y 
              el navegador lo va a detectar como una multiplicacion del valor de b que seria el numero 5 ya que en su contenido tiene el numero 5
              y lo va a multiplicar por el valor de c que en este caso es igual a 5, ya que se le asigna el valor de b*10 pero como 
              b tiene el valor de 5 se va a multiplicar 5*5 y el contnido de c seria 25. Por lo tanto no es posible asigarle el valor de $b *= $c';
    ?>
    <?php
        $z[0] = "MySQL";
        echo '<br>El contenido de la variable z = ', print_r($z);
    ?>
    <h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de la matriz $GLOBALS o del modificador global de PHP.</p>


    <h2>Inciso 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script: <br>
        $a = “7 personas”; <br>
        $b = (integer) $a;<br>
        $a = “9E3”;<br>
        $c = (double) $a;
    </p>
    <?php
        $a = "7 personas";
        echo '<br>El valor de a = ',$a;
        $b = (integer) $a;
        echo '<br>El valor de b = ',$b;
        $a = "9E3";
        echo '<br>El valor de a = ',$a;
        $c = (double) $a;
        echo '<br>El valor de c = ',$c;
    ?>

    <h2>Inciso 6</h2>
    <p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas usando la función var_dump(<datos>).</p>
</body>
</html>