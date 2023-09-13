<?php
    include "function.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP Filters</title>
</head>
<body>
<form action= "" method="post">
<table>

        <tr>
            <td>Enter the first Number :</td>
            <td><input type="number" name="num1"/></td>
        </tr>

        <tr>
            <td>Enter the Second Number :</td>
            <td><input type="number" name="num2"/></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"/></td>
        </tr>
</table>
</form>


<?php
    if(isset($_POST['calculation'])){
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];

        if(empty($numOne) or empty($numTwo)){
                echo "<span style = 'color: #EE6554'>Field must not be empty .</span> <br>";
        }else{
            echo "First Number is : " .$numOne. " Second Number is " .$numTwo. "<br/>";
        $cal = new Calculation;
        $cal ->add($numOne, $numTwo);
        $cal ->sub($numOne, $numTwo);
        $cal ->mul($numOne, $numTwo);
        $cal ->div($numOne, $numTwo);
        }
    }
?>

</body>
</html>
