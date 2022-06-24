<?php 
	function articles_all ($link){
		$query = "SELECT * FROM mvc_nikulin ORDER BY id DESC";
		$result = mysqli_query($link,$query);
		if (!$result) die(mysqli_error($link));
			$n = mysqli_num_rows($result);
			$articles = array();
			for ($i=0; $i < $n; $i++) { 
				$row = mysqli_fetch_assoc($result);
				$articles[] = $row;
			}
		return $articles;
		}
		function articles_get($link, $id_article)
		{
			$query = sprintf("SELECT * FROM mvc_nikulin WHERE id=%d", (int)$id_article);
			$result = mysqli_query($link, $query);

			if(!result) die (mysqli_error($link));

			$article = mysqli_fetch_assoc($result);
			return $article;

		}
		function articles_new($title, $date, $content)
		{
		//подготовка
		$title = trim($title);
		$content = trim($content);
		//проверка
		if ($title == '')
			return false;
		//Запрос
		$t = "INSERT INTO articles (title, date, content) VALUES ('$s','%s','%s')";
		$query = sprinterf($t, mysqli_real_escape_string($link,$title), mysqlo_real_escape_string($link,$date), mysqli_real_escape_string($link,$content));
		
		//echo $query;
		$result = mysqli_query($link,$query);

		if(!$result)
			die(mysqli_error($link));
			return true;
		}
		function articles_edit($id,$title,$date,$content)
		{

		}
		function articles_delete($id)
		{
			
		}
		
?>