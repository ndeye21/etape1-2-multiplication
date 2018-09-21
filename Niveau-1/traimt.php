<?php
if(isset($_POST['table']))
{
    for($i =1 ; $i <= 10 ; $i++)
    {
        echo $i." X ".$_POST['table']." = ".$i*$_POST['table']."<br />";
    }
}
 ?>
