<!DOCTYPE html>
<html>
<head>
<title>Страничка добавления занятия</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>Страничка добавления занятия</h1>
<?php 
$conn = new mysqli("fizik38-mysql-1", "root", "LEGOduplo16", "fizik38-shedule-db");
if($conn->connect_error)
	{
    echo "br <b>Не удалось подлючиться к базе данных.</b>";
	}
else
    {
    echo "<b>Успешно подключена база данных:</b> <br> $conn->host_info";
    $sql = "INSERT INTO `lessons`(`id`, `student_name`, `day`, `start_time`, `finish_time`, `comment`, `valid_thru`) VALUES ('5','Бибка','3','1900','2030','','')";
    $result = $conn->query($sql);
	}
    
?>
</body>
</html>