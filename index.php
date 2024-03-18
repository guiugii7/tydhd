<?php
$num1 = 10;
$num2 = 5;
$operator = '*'; Можно изменить оператор на +, -, / для выполнения соответствующей операции

switch($operator) {
    case '+':
        $result = $num1 + $num2;
        echo "Результат сложения: " . $result;
        break;
    case '-':
        $result = $num1 - $num2;
        echo "Результат вычитания: " . $result;
        break;
    case '*':
        $result = $num1 * $num2;
        echo "Результат умножения: " . $result;
        break;
    case '/':
        if($num2 != 0) {
            $result = $num1 / $num2;
            echo "Результат деления: " . $result;
        } else {
            echo "Деление на ноль невозможно";
        }
        break;
    default:
        echo "Неверный оператор";
}
?>
