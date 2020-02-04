<?php
require_once("db.php");
function checkQueryResult($resultset){
    global $connection;
    if(!$resultset){
        die("QUERY FAILED : " . mysqli_error($connection));
    }
}

?>