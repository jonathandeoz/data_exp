<?php
$data="Hola bienvenido a este curso";
echo "First: ".strpos($data, "la")."\n";
echo "Second: ".strpos($data, "cu")."\n";
echo "Third: ".strpos($data, "pp")."\n";

if (strpos($data, "Ho") == FALSE ) echo "Igualando valores\n";
if(strpos($data, "pp")==FALSE) echo "Igualando valores\n";
if(strpos($data, "bi")!=FALSE) echo "Igualando valores\n";
?>