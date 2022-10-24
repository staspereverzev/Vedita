<?php
$iTwentyFive = 25;
$iHardLinkToAnotherVariable =& $iTwentyFive;
$iHardLinkToAnotherVariable = 1;

echo $iHardLinkToAnotherVariable;
echo $iTwentyFive;

?>