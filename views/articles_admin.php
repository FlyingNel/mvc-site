<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<a href="index.php?actin=add">Добавить статью</a>
		<div>
			<table class="admin-table">
				<tr>
					<th>Дата</th><th>Заголовок</th><th></th><th></th>
				</tr>
				<?php foreach ($articles as $a):?>
					<tr>
						<tb><?=$a['data']?></td>
						<tb><?=$a['title']?></td>
						<td><a 
						href="index.php?action=edit&id=<?=$a['id']?>">редактировать</a></td>
						<td><a 
						href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
		<footer>
			<p>Конецепция MVC <br> Copyrigth &copy; 2022</p>
		</footer>
	</div>
</body>
</html>

<?php foreach ($articles as $a):?>
<?php endforeach ?>