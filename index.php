<?php
	define("MY_BLOG", true);
	require_once("db.php");
	$posts = get_posts();
?>
<html lang="ru">
	<head>
	    <meta charset="utf-8" />
	    <title>Мой блог</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	<body>
		<div class="container-fluid">
			<?php foreach($posts as $post): ?>
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<p class="bg-info"><?php echo date("d.m.Y", strtotime($post["created_at"]))?></p>
						<h2><?php echo htmlspecialchars($post["title"]) ?></h2>
						<p><a href="post.php?id=<?php echo $post["id"] ?>">Подробнее</a></p>
					</div>
				</div>
			<?php endforeach; ?>
			<a class="btn btn-success" href="add_post.php">Создать новый пост</a>
		</div>
	</body>
</html>