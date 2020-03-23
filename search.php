<?php
$connect = mysqli_connect("localhost", "root", "", "register");

?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `register` WHERE CONCAT(`reg_id`, `user_name`, `email`, `ph_no`,`password`,`user_image`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `register`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "register");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

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
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>phone NO</th>
                    <th>Password</th>
                    <th>Image</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['reg_id'];?></td>
                    <td><?php echo $row['user_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['ph_no'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['user_image'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>


    </body>
</html>
