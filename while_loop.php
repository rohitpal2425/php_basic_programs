<?php
$count =0;
$counter =1;
while($counter<=100)
{
    if($counter%2==0)
    {
        echo "Name is $counter";
        echo "</br>";
        $count =$count+1;
    }
    $counter++;
}
echo "The total number of even number's are: $count";
?>