<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" type="text/css" href="#">
	<link 
	rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQlaWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<a href="admin">admin-panel</a>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Опубликовано: <?=$article['data']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>Концепция MVC<br>Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>