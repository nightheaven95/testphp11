<?php
	define("MY_BLOG", true);
	require_once("db.php");

	$title = empty($_POST["title"]) ? "" : $_POST["title"];
	$text  = empty($_POST["text"])  ? "" : $_POST["text"];

	if ($title && $text) {
		$success = save_post($title, $text);

		if ($success) {
			header("Location: index.php");
			exit;
		} else {
			$warning = "Не удалось создать пост!";
		}
	}

?>
<html lang="ru">
	<head>
	    <meta charset="utf-8" />
	    <title>Мой блог</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<body>
		<div class="container-fluid">
			<div class="row">
					<div class="col-xs-6 col-sm-3">
						<?php if (isset($warning)): ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<h4>Ошибка!</h4>
							<p><?php echo $warning ?></p>
						</div>
						<? endif; ?>
						<h1>Добавление поста</h1>
						<form action="add_post.php" method="POST" class="form-horizontal">
							<div class="form-group">
								<label for="title">Заголовок</label>
								<input id="title" required type="text" name="title" value="<?php echo htmlspecialchars($title)?>" class="form-control" placeholder="Заголовок">
							</div>
							<div class="form-group">
								<label for="text">Текст</label>
								<textarea id="text" required rows="5" class="form-control" name="text" placeholder="Текст"><?php echo htmlspecialchars($text)?></textarea>
							</div>
							<button type="submit" class="btn btn-default">Создать пост</button>
							<a class="btn btn-info" href="index.php">Назад</a>
						</form>
					</div>
			</div>
		</div>
	</body>
</html>
