<?php
    // header ("Content-Type: text/html; charset=utf-8");
    require_once "calc.php";

    $inputOne=$_REQUEST["inputOne"];
    $inputTwo=$_REQUEST["inputTwo"];
    $operation=$_REQUEST["operation"];
    $button=$_REQUEST["button"];
    $result="";
    if (!empty($inputOne) && !empty($inputTwo)) {
        if (!empty($button)) {
            $result=calculator($inputOne, $inputTwo, $operation);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Calculator</title>
    </head>
    <body>
        <div class="mainContainer">
            <form id="forma">
                <div class="inputString">
                    <label class="inputLabel" for="inputOne">Первое число
                        <input type="number" required min="-999" max="999" name="inputOne"
                               placeholder="ххх" id="inputOne" class="inputField numberOne raz">
                    </label>
                    <label class="operationLabel">Oперация
                        <select class="operationSelect" name="operation">
                            <option class="operation">+</option>
                            <option class="operation">-</option>
                            <option class="operation">*</option>
                            <option class="operation">/</option>
                        </select>
                    </label>
                    <label class="inputLabel" for="inputTwo">Второе число
                        <input type="number" required min="-999" max="999" name="inputTwo"
                               placeholder="ххх" id="inputTwo" class="inputField numberTwo raz">
                    </label>
                </div>
                <input class="buttonCalc" type="submit" name="button" value="Вычислить"/>
            </form>
            <span class="outputLabel">Результат:</span>
            <div class="output"><?php echo $result; ?></div>
        </div>
    </body>
</html>

<!--
http://localhost/wdb-course-3/software/calculatorPHP/index.php
-->
