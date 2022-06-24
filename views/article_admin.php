<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Концепция MVС</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<div>
			<form method="post" action="index.php?action=add">
				<label>
					Заголовок статьи:<br>
					<input type="text" name="title" value="" class="form-item" required>
				</label><br>

				<label>
					Дата:<br>
					<input type="date" name="date" value="" class="form-item" required>
				</label><br>

				<label>
					Тексt статьи:<br>
					<textarea class="form-item" name="content" required>
					</textarea>
				</label><br>

				<label>
					<input type="submit" value="Сохранить" class="btn">
				</label>
			</form>
		</div>
		<footer>
			<p>Концепция MVC<br> Copyright &copy; 2022</p>
		</footer>
	</div>
</body>
</html>