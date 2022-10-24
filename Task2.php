<?php
$variable = 100;
if (isset ($variable))
    echo "Такая переменная есть. Ее значение $variable. ";

unset ($variable);
if (isset ($variable))
    echo "Такая переменная есть. Ее значение $variable. ";
else
    echo "Такой переменной нет. ";  
    
define("CONSTANT", 50);
echo CONSTANT;
echo "<pre>"; var_dump (defined("CONSTANT")); echo "</pre>";
echo "<pre>"; var_dump (defined ("NOT_DEFINED_CONSTANT")); echo "</pre>";
?>