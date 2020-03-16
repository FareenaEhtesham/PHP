<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="calculator.php" method="get">
    <label>Enter 1st Number:</label>

                <br/>

    <input type="number" name ="first">
    
                    <br/><br/>
    <label>Enter 2nd Number:</label>

                    <br/>
    <input type="number" name ="second">
    
                    <br/><br/>

    <select name="operator">

    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
    </select>

    <br/><br/>

    <input type="submit" name="submit" value="submit">
    <br/><br/>
    
    </form>

    <?php 
  
    if(isset($_GET['submit'])){

        $num1 =$_GET["first"];
        $num2 =$_GET["second"];
        $operator=$_GET["operator"];

        switch($operator){

            case 'Add':
                $result=$num1+$num2;
                echo "Addition: $result";
            break;

            case 'Subtract':
                $result=$num1-$num2;
                echo "Subtraction: $result";
            break;

            case 'Multiply':
                $result=$num1*$num2;
                echo "Multiplication: $result";
            break;

            case 'Divide':
                $result=$num1/$num2;
                echo "Divison: $result";
            break;

            default:
            echo"Choose any of these operation mentioned above!!!";
        break;
                
        }
    }
    
    ?>


</body>
</html>