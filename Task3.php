<?php

$sTwentyFiveWithSpace = "25 ";
$dEightPointTwentyFiveHundredths = 8.25;
$sEmptyString = "";
$bFalse = false;
$iZero = 0;

echo (boolean) $sTwentyFiveWithSpace. " (" . gettype( (boolean) $sTwentyFiveWithSpace) . ")";
echo (boolean) $dEightPointTwentyFiveHundredths. " (" . gettype( (boolean) $dEightPointTwentyFiveHundredths) . ")";
echo (int) $sEmptyString. " (" . gettype( (boolean) $sEmptyString) . ")";
echo (int) $iZero. " (" . gettype( (boolean) $iZero) . ")";
echo (int) $bFalse. " (" . gettype( (boolean) $bFalse) . ")";

echo (int) $bFalse. " (" . gettype( (int) $bFalse) . ")";
echo settype($iZero, "integer");
$bFalse = (int)$bFalse;
echo $bFalse;

?>