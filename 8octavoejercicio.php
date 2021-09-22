<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF8">
                    <title>PHP</title><!--el title nos aparece como el nombre de la pestaña-->
                    <link href="8stylephp.css" rel="stylesheet" type="text/css">
                        <!-- este enlace referencia a la hoja de estilos-->
                </head>
<body style="background-color:aquamarine">
    <header>
    <h1 align="center">Conversor de Euros a Pesos</h1>
    </header>

    <section>
        <article>
        <center>
            <form action="8octavoejercicio.php" method="POST">

            <table>
                <tr>
                    <td>cantidad:</td>
                    <td><input type="number" name="can">€</td>
                </tr>

            </table>
            <input type="submit" value="convertir">
            </form>
        </center>
</article></section></body></html>


<?php

if ($_POST) {
    $can=$_POST['can'];

    $euro=$can*4564.63;
   
    echo"<center>";
    echo"<h2>El Total en Pesos es:</h2>";
    echo"<h2>$ $euro</h2>";
    echo"</center>";
}

?>


