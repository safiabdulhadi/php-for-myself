<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "phpapps");

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);



if(con){
    echo "hello " ;
}

?>