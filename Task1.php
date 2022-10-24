<?php

$a =array( 'a'=> 1, 'b'=> 0.002, 'c'=>array( 'x', 'y', 'z'), 'd' => "string", 'e' => true); 
echo "<pre>"; print_r ($a); echo "</pre>";
echo "<pre>"; var_dump($a); echo "</pre>";
echo "<pre>"; var_export($a); echo "</pre>";

?>