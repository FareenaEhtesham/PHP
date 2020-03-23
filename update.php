<?php

$con = mysqli_connect("localhost","root","","register");


if($con){
echo"Connected";

}

else{
    echo "NOt Connected!!";
}


 $update_query="UPDATE register SET password='helloshimmi' where reg_id=7";

 $run_query=mysqli_query($con ,$update_query);

 if($run_query){
     echo"Updated!!!";
 }

 else{
     echo"Not Updated";
 }

 mysqli_close($con);

?>
