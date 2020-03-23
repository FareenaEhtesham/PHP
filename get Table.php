<?php

$con = mysqli_connect("localhost","root","","register");


if($con){
echo"Connected";

}

else{
    echo "NOt Connected!!";
}  



  $select_query = "SELECT * FROM register";
   $run_query =mysqli_query($con ,$select_query);


  
?>
     



<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
       
            <table>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>phone NO</th>
                    <th>Password</th>
                    <th>Image</th>
                </tr>

                <?php while($row = mysqli_fetch_array($run_query,MYSQLI_ASSOC)){?>
                <tr>
                    <td><?php echo $row['reg_id'];?></td>
                    <td><?php echo $row['user_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['ph_no'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user_image'];?></td>
                </tr>
                <?php }?>
            </table>



    </body>
</html>
