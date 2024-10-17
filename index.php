<!DOCTYPE html>
<html>
<head>
<title>Расписание</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h2>Таблица из DB</h2>
<?php
$conn = new mysqli("fizik38-mysql-1", "root", "LEGOduplo16", "fizik38-shedule-db");
if($conn->connect_error)
	{
    echo "<b>Не удалоь подлючиться к базе данных.</b>";
	}

$sql = "SELECT * FROM lessons WHERE `day` = 3";
if($result = $conn->query($sql))
{
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя</th><th>День недели</th><th>Время начала</th><th>Время конца</th><th>Комментарий</th><th>Действительно до:</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["student_name"] . "</td>";
            echo "<td>" . $row["day"] . "</td>";
			echo "<td>" . $row["start_time"] . "</td>";
            echo "<td>" . $row["finish_time"] . "</td>";
            echo "<td>" . $row["comment"] . "</td>";
			echo "<td>" . $row["valid_thru"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}



$sql = "SELECT * FROM lessons WHERE `day` = 2 ORDER BY `start_time`";
if($result = $conn->query($sql))
{
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Имя ученика</th><th>День недели</th><th>Время начала</th><th>Время конца</th><th>Комментарий</th><th>Действительно до:</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["student_name"] . "</td>";
            echo "<td>" . $row["day"] . "</td>";
			echo "<td>" . $row["start_time"] . "</td>";
            echo "<td>" . $row["finish_time"] . "</td>";
            echo "<td>" . $row["comment"] . "</td>";
			echo "<td>" . $row["valid_thru"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}


$conn->close();
?>
</body>
</html>