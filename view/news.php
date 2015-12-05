<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Главная | Список новостей</title>
</head>
<body>
	<div>
		<?php foreach ($items as $item) : ?>
		<div style="border-bottom: 1px solid black; margin-bottom: 10px; padding-bottom: 10px;">
			<a
				href="/lesson2.1/controller/article.php?id=<?php echo $item->id; ?>">
				<?php echo $item->title; ?>
			</a>
			<div style="font-style: italic;">
				<?php echo $item->body; ?>
			</div>
		</div>
		<?php endforeach; ?>

		<form action="/lesson2.1/controller/add.php" method="post">
			<label>Название <input type="text" name="title" value="" /></label> <br /> 
			<label>Текст <textarea rows="3" cols="30" name="body"></textarea></label> <br /> 
			<input type="submit" value="Добавить" />
		</form>

	</div>
</body>
</html>
