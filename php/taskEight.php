<?php
	
    $arr =  [
                [1, 2, 3, 'A'],
                [1, 2, 'B', 'C'],
                [1, 'D', 'E', 'F']
            ];
    $max = 3;

    for($i=0; $i<3; $i++)
    {
        for($k=0; $k<$max; $k++)
        {
            echo $arr[$i][$k];     
        }
        $max--;  
        echo"\r\n".'<br>';
    }
    echo"\r\n".'<br>';
    echo"\r\n".'<br>';

    for($i=0; $i<3; $i++)
    {
        for($k=(4-1-$i); $k<4; $k++)
        {
            echo $arr[$i][$k];     
        }
        $max--;  
        echo"\r\n".'<br>';
    }
?>