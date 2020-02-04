<?php
$connection= mysqli_connect('localhost','root','','agrifood');
if(!$connection)
{
    die("Some issue in connecting ". mysqli_error($connection));
}

?>