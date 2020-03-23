
//Connection 
<?php

$con = mysqli_connect("localhost","root","","register");


if($con){
echo"Connected";

}

else{
    echo "NOt Connected!!";
}


 $select_query="select * from register";

 $run_query =mysqli_query($con ,$select_query);

 $result=  mysqli_fetch_array($run_query,MYSQLI_NUM);    // fetch array takes 2 argument

 if($result){
     echo "<br/>".$result[2];     //Due to MYSQLI_NUM we give in the form of index
                                //0 -> reg_id  1-> user_name  2-> email 3-> phno 4-> password 5-> image
 }

 else{
     echo"Error";
 }


$select_query="select * from register";

 $run_query =mysqli_query($con ,$select_query);
 $result=  mysqli_fetch_array($run_query,MYSQLI_ASSOC);   

 if($result){
     echo "<br/>".$result['user_name'];     //by using these manner we can only get 1 value 
 }

 else{
     echo"Error";
 }
?>

