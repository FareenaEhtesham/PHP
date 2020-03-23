
<?php

$con = mysqli_connect("localhost","root","","register");


if($con){
echo"Connected";

}

else{
    echo "NOt Connected!!";
}


 $delete_query = "DELETE  from register where reg_id=6";

 $run_query=mysqli_query($con ,$delete_query);

 if($run_query){
     echo"Deleted!!!";
 }

 else{
    echo"Not Deleted";
}

 mysqli_close($con);

?>
