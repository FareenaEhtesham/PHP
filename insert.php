
//Connection
<?php

$con = mysqli_connect("localhost","root","","register");


if($con){
echo"Connected";

}

else{
    echo "NOt Connected!!";
}



$insert_post="INSERT into register (user_name ,email,ph_no,password,user_image) 
VALUES ('Shimmi','shim123@yahoo.com','36901975','hellshimmi','NULL')";


$run_query=mysqli_query($con ,$insert_post);

 if($run_query){
    echo"Inserted!!!";
 }

 else{
    echo"Not Inserted";
 }

 mysqli_close($con);

?>
