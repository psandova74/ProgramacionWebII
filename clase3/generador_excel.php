<?php
// Header para descargar la tabla como archivo Excel
header(header:"Content-type: application/vnd.ms-excel; name='excel'; charset=utf-8");
header(header: "Content-Disposition: filename=ejemplo.xls");
header(header: "Pragma: no-cache");
header(header: "Expires: 0");

echo "<table><tr><td colspan='2'>Prueba de excel</td></tr>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Descripcion</th>";
echo "</tr>";
echo "<tr>";
echo "<td>1</td>";
echo "<td>Codigo 1</td>";
echo "</tr>";