<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style= "font-style: italic">If else Statements</h1>


<form method="GET" action="if_else.php">


<label>Enter English Marks:</label>
<input type="text" name="English">
<br/><br/>

<label>Enter Maths Marks:</label>
<input type="text"  name="Maths">
<br/><br/>

<label>Enter Programming Marks:</label>
<input type="text"  name="Programming">
<br/><br/>


<label>Enter DSA Marks:</label>
<input type="text"  name="DSA">
<br/><br/>

<input type="submit" name="submit">
<br/><br/>
</form>
    <?php
    


if(isset($_GET["submit"])){


    $English=$_GET["English"];

    $Maths   =$_GET["Maths"];

    $Programming=$_GET["Programming"];

    $DSA=  $_GET["DSA"];

    $Total= ($English + $Maths + $Programming +$DSA)/400;

    $percentage =$Total*100;

    if($percentage >=80){

        echo"Hey Your GRade is A-1";
        echo "<h3 style=color:Green> Excellent!! </h3> ";

    }


    else if($percentage <80 && $percentage >=60){

        echo"Hey Your GRade is A";
        echo "<h3 style=color:Green> Good!! </h3> ";

    }


    else if($percentage <60 && $percentage >=40){

        echo"Hey Your GRade is B";
        echo "<h3 style=color:Green> Better!! </h3> ";

    }

    else{
        echo "<h3 style=color:Red> Need Improvement </h3> ";
    }

}





    // $grade = 'C';

    // if($grade == 'A'){

    //     echo "<h3 style = color:green> Hey!! You are passed </h3>";
    // }

    // else if($grade == 'B'){
    //     echo "<h3 style = color:green> Hey!! You are passed But Work hard</h3>";
    // }

    // else if($grade == 'C'){
    //     echo "<h3 style = color:green> Hey!! You are passed But You need improvement</h3>";
    // }

    // else{
    //     echo"<h3 style= color:red> You are Fail</h3>";
    // }
    
    ?>

</body>
</html>