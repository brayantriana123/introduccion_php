<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables  constantes</title>
</head>
<body>
    <h1>variables y constantes</h1>
    <!--script php -->
    <?php
        /*1.La formas de representar las variables en php es anteponiendo el simbolo $ a la palabra que utlizaremos como variable. Ejemplo: sedad. */

        /*2.Debemos prestar atenciòn a las mayuscula y minisculas ya que php reconoce la diferencia entre las dos. */

        /*3. ¿Para que se utilizan las variables? Gracias a ellas podemos realxar operaciones aritmeticas y operaciones con cadenas, etc.*/

        /*4.Las variables las utilizaremos como y cuando queramos en una misma pagina, ya que no exite limitaciones en cuanto a su uso. */

        /*5.Hay que prestar atenciòn a no provocar errores por utilizar como variables palabras reservadas por el lenguaje. Ejemplo sos se genera error, porque es una variables predefinida. */

        /*6.Tambien se debe evitar el error al empezar una variables por un  numero. Ejemplo: $35ver = 45 es un error. */
        /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar las comillas a la hora de defiirlas, ya que su uso indicaria que se esta hablando de una cadena. Ejemplo:$cuenta = ?, $nombre = 'jajaa' */
        
        /*Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser utilizando la opciòn ocholl: otra puede ser mediante print (); */

        $a=5;
        $b="7";
        echo "<b><h1>";
        echo($a);
        echo"<br>";
        echo($b);
        echo "<b><h1>";

        //Constante
        //La forma de definir una costante es mediante la funciòn define
        //Sintaxis: define("nombre_variable, "valor_variable")

        define("capital_colombia","Bogota");
        define("habitantes", "7000000")

    ?>

</body>
</html>
