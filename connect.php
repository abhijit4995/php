<?php
$conn=new mysqli('localhost','root','','crud');
if($conn){
    echo "DB connected successfully";
}else{
    echo "DB not connected successfully";
}
?>