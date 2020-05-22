<?php

$consulta = "SELECT * FROM vista_meses_trabajadores";
                            
$conexion=new conexion();
$DBH=$conexion->conn_servidor_1();
$STH = $DBH->query($consulta);

echo"<tbody>";
while($row = $STH->fetch())
{
    echo "<tr>";
        echo "<th>" . $row['mes'] . "</th>";
        // En caso de no querer redondear decimales usar solo $row['nombre_campo'] en caso de redondear usar number_format($row['nombre_campo'], cantidad de decimales) //
        //echo "<td>" . $row['count'] . "</td>";//
        //echo "<td>" . $row['sum']. "</td>";//
        echo "<td>" . number_format($row['count'],3) . "</td>";
        echo "<td>" . number_format($row['sum'],3) . "</td>";
    echo "</tr>";
}
echo"</tbody>"
?>