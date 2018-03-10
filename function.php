<?php

function task1($array, $bool)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "<p>".$array[$i]."<p>";
        echo "<br>";
    }
    if ($bool) {
        echo implode(" ", $array);
        return implode(" ", $array);
    }
}

function task2($arr, $action)
{
    $action == "**" ? $sign = "**" : $sign = ord($action);
    $value = $arr[0];
    if ($sign === 43 || $sign === 45 || $sign === 42 ||
        $sign === 47 || $sign === 37 || $sign === "**") {
        for ($i = 1; $i < count($arr); $i++) {
            if (!is_numeric($arr[$i]) || !is_numeric($arr[0])) {
                echo "Переменная в массиве не является числом !";
                $value = null;  // нул чтобы нулевой элемент массива не выводился
                break; // бряк чтобы массив не повторялся
            } else {
                switch ($sign) {
                    case "**":
                        $value = $value ** $arr[$i];
                        break;
                    case 43:
                        $value += $arr[$i];
                        break;
                    case 45:
                        $value -= $arr[$i];
                        break;
                    case 42:
                        $value *= $arr[$i];
                        break;
                    case 47:
                        $value /= $arr[$i];
                        break;
                    case 37:
                        $value %= $arr[$i];
                        break;
                }
            }
        }
        echo $value;
    } else {
        echo "Введен неверный символ";
    }
}

function task3()
{
    $arr = func_get_args();
    $sign = $arr[0];
    array_shift($arr);
    task2($arr, $sign);
}

function task4($figure)
{
    if (!(int)$figure) {
        echo "Введите верное значение";
    } else {
        $e = 0;
        do {
            $e++;
            echo "<table>";
            for ($i = 1; $i <= $e; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $e; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } while ($e <= $figure);
    }
}

$task5 = function ($str) {
    $clearStr = preg_split('//u', $str, -1,
        PREG_SPLIT_NO_EMPTY);
    $num = count($clearStr);
    $newStr = null;
    while ($num >= 0) {
        $newStr = $newStr . $clearStr[$num];
        $num--;
    }
    if (mb_strtolower(str_replace(' ', '', $str)) ===
        mb_strtolower(str_replace(' ', '', $newStr))) {
        return true;
    } else {
        return false;
    }
};

function task5_1($task5)
{
    ($task5 == true ) ? print_r("Слово является полиндромом") : print_r("Не полиндром") ;
}

function task6()
{
    $currentlyDate = date('d.m.Y H:i');
    $unixDate = mktime(00, 00, 00, 2, 24, 2016);
    $newDate = date("d.m.Y H:i:s", $unixDate);
    echo $currentlyDate;
    echo "<br>" . $newDate;
}

function task7()
{
    $strKarl = "Карл у Клары украл Кораллы";
    echo str_replace('К', ' ', $strKarl) . "<br>";
    $strLimonade = "Две бутылки лимонада";
    echo str_replace("Две", "Три", $strLimonade) . "<br>";

}

function task8()
{
    echo file_get_contents('./test.txt', true);
}

function task9()
{
    $str = "Hello again";
    $handle = fopen('./anothertest.txt', 'w+');
    fwrite($handle, $str);
    fclose($handle);
}


?>

<style>
    table {
        display: inline-block;
        border-collapse: collapse;
        margin: 2px;
    }

    td {
        border: 1px solid black;
        padding: 3px;
    }
</style>









