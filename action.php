
<?php 

$conn = new mysqli("fizik38-mysql-1", "root", "LEGOduplo16", "fizik38-shedule-db");
if($conn->connect_error)
	{
    echo "br <b>Не удалось подлючиться к базе данных.</b>";
	}
else
    {
    echo "<b>Успешно подключена база данных:</b> <br> $conn->host_info";
    mysqli_set_charset($conn, "utf8");
 #   $last_id = mysqli_insert_id($conn);
 #   echo $last_id;

    }

$stmt = $conn->prepare("INSERT INTO `lessons`(`id`, `student_name`, `day`, `start_time`, `finish_time`, `comment`, `valid_thru`) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('isiiisi', $id, $student_name, $day, $start_time, $finish_time, $comment, $valid_thru);


$id = ($_POST['id']); 
$student_name = htmlspecialchars($_POST['student_name']); 
$day = htmlspecialchars($_POST['day']); 
$start_time =  htmlspecialchars($_POST['start_time']); 
$finish_time = htmlspecialchars($_POST['finish_time']); 
$comment =  htmlspecialchars($_POST['comment']); 
$valid_thru = htmlspecialchars($_POST['valid_thru']);

$stmt->execute();



?> 

