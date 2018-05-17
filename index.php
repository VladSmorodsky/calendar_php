<!DOCTYPE html>
<html>
<head>
	<title>PHP Calendar month</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require_once "calendar.php"?>
<div class="options">
		<div class="accordeon">
			<div id="exit">x</div>
			<dl>
				<dt>Просмотр года</dt>
				<dd>
					<div class="option" id="year">
						<form action="" method="post">
							<select name="years" id="">
								<?php
								for($years = 1970; $years < 2060; $years++)
									echo "<option>".$years."</option>";
								?>
							</select>
							<input type="submit" value="Перейти">
						</form>
					</div>
				</dd>
			</dl>
			<dl>
				<dt>Создание выходного</dt>
				<dd>
					<div class="option" id="new">
						<a href="add_rest.php"><button>Создать запись</button></a>
					</div>
				</dd>
			</dl>
		</div>
		<div id="cog"><i class="fa fa-cog fa-3x" title="Действие"></i></div>

</div>


<?php
if(!empty($_POST))
	$entered_year = $_POST['years'];
else
	$entered_year = date('Y');
?>
<h1 id="cur_year"><?=$entered_year?></h1>
<div class="container">
<?php
	$months = Array(
		0 => 'Январь',
		1 => 'Февраль',
		2 => 'Март',
		3 => 'Апрель',
		4 => 'Май',
		5 => 'Июнь',
		6 => 'Июль',
		7 => 'Август',
		8 => 'Сентябрь',
		9 => 'Октябрь',
		10 => 'Ноябрь',
		11 => 'Декабрь'
	);
	for ($month = 1; $month <= 12; $month++) { ?>
		<div class="b-calendar b-calendar--many">
			<div class="b-calendar__title"><span class="b-calendar__month"><?= $months[$month-1] ?></span> <span class="b-calendar__year"><?=$entered_year?></span></div>
			<?php
				echo draw_calendar($month,$entered_year);
			?>
		</div>
	<?php }
?>


</div>
<script src="js/jquery-2.2.3.js"></script>
<script src="js/main.js"></script>
<script src="js/options.js"></script>
</body>
</html>