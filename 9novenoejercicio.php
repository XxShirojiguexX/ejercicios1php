<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF8">
                    <title>PHP</title><!--el title nos aparece como el nombre de la pestaña-->
                    <link href="stylephp.css" rel="stylesheet" type="text/css">
                        <!-- este enlace referencia a la hoja de estilos-->
                </head>
<body style="background-color:aquamarine">
    <header>
    <h1 align="center">Conversor de Pesos a Euros</h1>
    </header>

    <section>
        <article>
        <center>
            <form action="9novenoejercicio.php" method="POST">

            <table>
                <tr>
                    <td>cantidad:</td>
                    <td><input type="number" name="can">$</td>
                </tr>

            </table>
            <input type="submit" value="convertir">
            </form>
        </center>
</article></section></body></html>


<?php

if ($_POST) {
    $can=$_POST['can'];

    $peso=$can*0.00022;
   
    echo"<center>";
    echo"<h2>El Total en Euros es:</h2>";
    echo"<h2>€ $peso</h2>";
    echo"</center>";
}

?>
