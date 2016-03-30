<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <?php
        require 'menu.php';
        ?>

        <form action="resumen.php" method="POST">
            <table>
                <tr>
                    <td>RUT: <input type="number" name="rut" id="rut" required="true">-<input type="text" name="digRut" id="digRut" required="true"></tr>
                <td>NOMBRE: <input type="text" name="nombre" id="nombre" required="true"></tr>
                    </tr>
                <tr>                    
                    <td>CARGO: <select name="cargo" id="cargo" required="true">
                            <option value="">Seleccione...</option>
                            <option value="cargo1">Desarrollador Senior(1001)</option>
                            <option value="cargo2">Desarrollador Junior(1002)</option>
                            <option value="cargo3">DBA(2001)</option>
                            <option value="cargo4">Jefe de Proyecto(1003)</option>
                            <option value="cargo5">Diseñador gráfico(2002)</option>
                        </select></tr>
                <td>FECHA INICIO: <input type="date" name="fecha" id="fecha" required="true"></tr>
                    </tr>
                <tr>
                    <td>DIAS TOTALES: <input type="number" name="dias" id="dias" required="true"></tr>
                <td>COMENTARIOS: <input type="text" name="comentarios" id="comentarios" required="true"></tr>
                    </tr>
                <tr>
                    <td><input type="button" name="limpiar" id="limpiar" value="Limpiar" onclick="limpiar()"</tr>
                <td><input type="submit" name="guardar" id="guardar" value="Guardar" onclick="guardar()"></tr>
                    </tr>
            </table>
        </form>
    </body>

    <script>
        function limpiar() {

        }
        function guardar() {

        }
    </script>
</html>
