<?php
$arr = [1, 3, 34, 32, 56, 67, 12, 56];
$element = 56;
for($i=0; $i<8; $i++)
{
    if($arr[$i] == $element)
    {
        echo "Element ".$element." is found in index: ".$i;
        break;
    }
}
?>