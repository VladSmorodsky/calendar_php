<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add the rest day</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form_rest">
<form action="" method="post">
    <div id="form_caption">
        <h2>Введите дату важного события</h2>
    </div>
    <!--input type="text" name="date_of_rest"-->
    <select name="rest_day" class="form_add">
        <?php

        for($day = 1; $day <=31; $day++)
            echo "<option>".$day."</option>";
        ?>
    </select>

    <select name="rest_month" class="form_add" id="month">
        <?php
        $months = Array(
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Март',
            4 => 'Апрель',
            5 => 'Май',
            6 => 'Июнь',
            7 => 'Июль',
            8 => 'Август',
            9 => 'Сентябрь',
            10 => 'Октябрь',
            11 => 'Ноябрь',
            12 => 'Декабрь'
        );
        for($month = 1; $month <=12; $month++)
            echo "<option>".$months[$month]."</option>";
        ?>
    </select>

    <select name="rest_year" class="form_add">
        <?php
        for($years = 1970; $years < 2060; $years++)
            echo "<option>".$years."</option>";
        ?>
    </select>


    <textarea name="rest_caption" placeholder="Текст события"></textarea>
    <div id="form_footer">
        <input type="submit" value="Добавить">
    </div>
</form>
</div>
<script src="js/jquery-2.2.3.js"></script>
<script src="js/options.js"></script>
</body>
</html>

<?php

    if(isset($_POST['rest_caption'])){

        $months_name = Array(
            'Январь' => 1,
            'Февраль' => 2,
            'Март' => 3,
            'Апрель' => 4,
            'Май' => 5,
            'Июнь' => 6,
            'Июль' => 7,
            'Август' => 8,
            'Сентябрь' => 9,
            'Октябрь' => 10,
            'Ноябрь' => 11,
            'Декабрь' => 12
        );
        include_once "db_config.php";

        $date = $_POST['rest_year'].'-'.$months_name[$_POST['rest_month']].'-'.$_POST['rest_day'];
        $capt = $_POST['rest_caption'];
        $sql_query = "INSERT INTO `rest` VALUES(null,'".$date."','".$capt."')";
        
        //$insert_day = $conn->query($sql_query) or die('Ошибка отправки');

        if($conn->query($sql_query) === TRUE){
            echo "<div id='success'><h3>Ваши данные успешно занесены</h3><a href='index.php'>Вернуться к просмотру календаря</a></div>";
        } else {
            echo "Error: " . $sql_query . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>