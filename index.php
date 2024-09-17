<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="section">
        <?php

        echo '<div class="bl">';

        // Задание 1
        
        $students = array("Иванов", "Петров", "Сидоров", "Кузнецов", "Смирнов", "Попов", "Лебедев", "Козлов", "Новиков", "Морозов");

        echo "<h3>Список студентов:</h3>";
        foreach ($students as $student) {
            echo $student . "<br>";
        }

        $student_count = count($students);
        echo "<p>Всего студентов: $student_count</p>";

        if (in_array("Сидоров", $students)) {
            echo "<p>Студент Сидоров есть в списке.</p>";
        } else {
            echo "<p>Студента Сидорова нет в списке.</p>";
        }

        $expelled = array_pop($students);
        echo "<p>Последний студент, исключенный из списка: $expelled</p>";
        echo '</div>';

        echo '<div class="bl">';
        echo "<h3>Обновленный список студентов:</h3>";
        foreach ($students as $student) {
            echo $student . "<br>";
        }
        echo '</div>';

        ?>
    </div>

    <?php
    echo "<hr>";

    // Задание 2
    
    $clubs = array(
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    );

    asort($clubs);

    echo "<h3>Отсортированный список кружков:</h3>";
    foreach ($clubs as $club => $surname) {
        echo "$club - $surname<br>";
    }
    echo "<hr>";
    // Задание 3
    
    $about = array(
        'name' => 'Булат',
        'surname' => 'Баширов',
        'group' => '427',
        'hobby' => 'футбол',
        'social' => [
            'Вконтакте' => 'https://vk.com/baiiikab',
            'Telegram' => '@BulatDear'
        ]
    );

    echo "<h3>Информация о студенте:</h3>";
    echo "<p><strong>Имя:</strong> " . $about["name"] . "</p>";
    echo "<p><strong>Фамилия:</strong> " . $about["surname"] . "</p>";
    echo "<p><strong>Группа:</strong> " . $about["group"] . "</p>";
    echo "<p><strong>Хобби:</strong> " . $about["hobby"] . "</p>";

    echo "<h4>Соцсети:</h4>";
    foreach ($about['social'] as $social => $link) {
        echo "$social: $link<br>";
    }
    

    ?>

</html>