<?php
$conn=mysqli_connect("");
if(mysqli_connect_error($conn)){
    echo"server not connected";
}
$sql="select * from    where ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)<1){
    echo"there is no data in database";
}else{
    $row=mysqli_fetch_array($result);
    
}