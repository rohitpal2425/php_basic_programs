<?php
$hour= Date('h');
if($hour<=12)
{
    echo "good morning everybody";

}
elseif ($hour <= 17)
{
    echo " Good Afternoon everybody";
}
elseif($hour<=20)
{
    echo "Good Evening everybody";

}
else
{
    echo "Good night everybody";
}
?>