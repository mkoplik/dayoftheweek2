
<!DOCTYPE html>
<html>
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .center-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <h1>find the day of the week of your birth by date</h1>

<form action="" method="post">
    <!-- <lable >выберите год Вашего рождения</lable><br> -->
	<select name="year">
    <option value="" disabled selected>select year</option>
    <?php
    $currentYear = date("Y");
    for ($year = 1960; $year <= $currentYear; $year++) {
        echo "<option value=\"$year\">$year</option>";
    }
    ?>
</select><br><br>
    <!-- <lable>введите месяц Вашего рождения</lable><br> -->
    <select name="month">
    <option value="" disabled selected>select month</option>
    <?php
    $currentMonth = date("M");
    for ($month = 1; $month <= 12; $month++) {
        echo "<option value=\"$month\">$month</option>";
    }
    ?>
</select><br><br>
    <!-- <lable>введите число Вашего рождения</lable><br> -->
    <select name="day">
    <option value="" disabled selected>select day</option>
    <?php
    $currentDay = date("D");
    for ($day = 1; $day<= 31; $day++) {
        echo "<option value=\"$day\">$day</option>";
    }
    ?>
</select><br><br>

	<input type="submit" value="submit">
   
</form>
<?php
if (isset($_POST['year'], $_POST['month'], $_POST['day'])){
$year = $_POST['year']; 
$month = $_POST['month']; 
$day = $_POST['day']; 

$dateString = $year . '-' . $month . '-' . $day;

// Преобразование строки даты во временную метку
$timestamp = strtotime($dateString);

// Получение дня недели по временной метке
$dayOfWeek = date("l", $timestamp);

echo "<h2 style='text-transform: uppercase;'>You were born on " . $dayOfWeek . "</h2>";
} else echo "make your choice please" 
?>
</div>
</body>
</html>

