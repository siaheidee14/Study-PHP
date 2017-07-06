<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="get">
        <input type="number" value="1" name="no1">
        <select name="symbol">
            <option value="add">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="no2">
        <button type="submit">Compute</button>
    </form>
    <?php
        $number1= $__GET['no1'];
        $number2= $__GET['no2'];
        $arithmetic= $_GET['symbol'];
    if ($arithmetic == "add") {
        $total= $number1 + $number2;
    }
    elseif ($arithmetic == "minus") {
        $total= $number1 - $number2;
    }
    elseif ($arithmetic == "multiply") {
        $total= $number1 * $number2;
    }
    elseif ($arithmetic == "divide") {
        if($number1 < $number2) {
            $total = $number1 / $number2;
        }
        else {
            
        }
    }

    ?>
</body>
</html>