<?php
for($i=1; $i<4; $i++)
{
    for($k=0; $k<$i; $k++)
    {
        echo "*";       
    }
    echo"\r\n".'<br>';
}
echo"\r\n".'<br>';
echo"\r\n".'<br>';
for($i=4; $i>0; $i--)
{
    for($k=1; $k<$i; $k++)
    {
        echo $k;       
    }
    echo"\r\n".'<br>';
}

$arr = ['A', 'B', 'C', 'D', 'E', 'F'];
$index = 0;
for($i=1; $i<4; $i++)
{
    for($k=0; $k<$i; $k++)
    {
        echo $arr[$index];   
        $index++;    
    }
    echo"\r\n".'<br>';
}

?>