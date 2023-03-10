<?php
    $arr = [
            [1,2,3,'A'],
            [1,2,'B','C'],
            [1,'D','E','F']

            ];
            $count=3;
            $flag=2;
            for($i=0;$i<=2;$i++)
            {
                
                for($j=0;$j<$count;$j++)
                {
                    echo $arr[$i][$j] ;
                    
                }
                echo "<br>";
                $count--;
            }
            for($i=0;$i<=2;$i++)
            {
                
                for($j=3;$j>$flag;$j--)
                {
                    echo $arr[$i][$j] ;
                    
                }
                echo "<br>";
                $flag--;
            }
?>