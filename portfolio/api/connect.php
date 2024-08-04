<?php

$connect = mysqli_connect("localhost","root","","votinglist") or die("connection failed");
if($connect){
    echo "Connected";

}
else{
    echo "Not Connected";

}



?>