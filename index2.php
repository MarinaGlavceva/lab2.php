<?php
// Получаем текущий день недели (например, "Monday", "Tuesday" и т. д.)
$dayOfWeek = date("l");

// Определяем расписание для сотрудников
$schedule = [
    "John Styles" => in_array($dayOfWeek, ["Monday", "Wednesday", "Friday"]) ? "8:00-12:00" : "Нерабочий день",
    "Jane Doe" => in_array($dayOfWeek, ["Tuesday", "Thursday", "Saturday"]) ? "12:00-16:00" : "Нерабочий день"
];

// Генерация HTML-таблицы с расписанием
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";
$index = 1;
foreach ($schedule as $name => $workHours) {
    echo "<tr><td>{$index}</td><td>{$name}</td><td>{$workHours}</td></tr>";
    $index++;
}
echo "</table>";
?>

<?php
// Инициализация переменных
a = 0;
b = 0;

// Цикл for: выполнение с известным числом итераций
// Увеличиваем a на 10, b на 5 на каждом шаге
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
}

echo "End of the loop: a = $a, b = $b\n";

// Добавляем вывод промежуточных значений в for
$a = 0;
$b = 0;
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
}
echo "Конец цикла: a = $a, b = $b\n";

// Переписываем с использованием while
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
    $i++;
}
echo "Конец цикла: a = $a, b = $b\n";

// Переписываем с использованием do-while
$a = 0;
$b = 0;
$i = 0;
do {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b\n";
    $i++;
} while ($i <= 5);
echo "Конец цикла: a = $a, b = $b\n";
?>