<?php
// menu.php

function readNumber($prompt)
{
    echo $prompt;
    $line = trim(fgets(STDIN));
    if (!is_numeric($line)) {
        echo "Ошибка: нужно ввести число.\n";
        return readNumber($prompt); // просто просим ввести заново
    }
    return $line + 0; // приведём к числу
}

while (true) {
    echo "\n=== МЕНЮ ===\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "0. Выход\n";
    echo "Выберите пункт: ";

    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case '1':
            $a = readNumber("Введите первое число: ");
            $b = readNumber("Введите второе число: ");
            echo "Числа сохранены: a = $a, b = $b\n";
            break;

        case '2':
            if (!isset($a) || !isset($b)) {
                echo "Сначала выберите пункт 1 и введите два числа.\n";
                break;
            }
            $sum = $a + $b;
            echo "Сумма: $a + $b = $sum\n";
            break;

        case '3':
            if (!isset($a) || !isset($b)) {
                echo "Сначала выберите пункт 1 и введите два числа.\n";
                break;
            }
            $diff = $a - $b;
            echo "Разность: $a - $b = $diff\n";
            break;

        case '4':
            if (!isset($a) || !isset($b)) {
                echo "Сначала выберите пункт 1 и введите два числа.\n";
                break;
            }
            if ($b == 0) {
                echo "Ошибка: деление на ноль.\n";
                break;
            }
            $div = $a / $b;
            echo "Частное: $a / $b = $div\n";
            break;

        case '5':
            $base = readNumber("Введите число (основание): ");
            $exp  = readNumber("Введите степень: ");
            $pow  = pow($base, $exp);
            echo "$base ^ $exp = $pow\n";
            break;

        case '0':
            echo "Выход из программы...\n";
            exit;

        default:
            echo "Неизвестный пункт меню, попробуйте ещё раз.\n";
    }
}
