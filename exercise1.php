<?php

echo "<table>";
for ($i = 0; $i <= 100; $i++)
{
    echo "<tr>";
    for ($j = 0; $j <= 100; $j++)
    {
        echo "<th>";
        if($i == 0 && $j == 0)
        {
             echo " ";
        }
        else if($i == 0 && $j != 0)
        {
             echo $j . " ";
        }
        else if($i != 0 && $j == 0)
        {
             echo $i . " ";
        }
        else
        {
             echo $i*$j . " ";
        }
        echo "</th>";
     }
     echo "</tr>";
}
echo "</table>";

/*
I tried to figure out the logic by experimenting with c++ pseudocode that I wrote below.
Once I figured it out logically, I converted the syntax of my c++ code into php code
Then, I added the necessary code needed to make the table in HTML
for (int i = 0; i < 100; i++)
{
    for (int j = 0; j < 100; j++)
    {
        if(i == 0 || j == 0)
        {
             std::cout<<i<<" ";
        }
        else
        {
             std::cout<<i*j<<" ";
        }
     }
     std::cout<<std::endl;
}
*/

?>



