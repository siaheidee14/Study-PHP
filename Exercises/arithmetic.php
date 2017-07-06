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
        <button type="submit" name="submit">Compute</button>
    </form>
    <?php
        if (isset($_POST['submit'])){
        $number1= $_GET['no1'];
        $number2= $_GET['no2'];
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
            else {
                die();
            }
            echo "Output: ". $total;
        }
    ?>
</body>
</html>