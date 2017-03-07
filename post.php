<?php
	define("MY_BLOG", true);
	require_once("db.php");
	
	if (empty($_GET["id"]) || (int)$_GET["id"] == 0) {
		header("Location: index.php");
		exit;
	}

	$post_id = (int)$_GET["id"];

	$post = get_post_by_id($post_id);
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
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<?php if ($post): ?>
							<p class="bg-info"><?php echo date("d.m.Y", strtotime($post["created_at"]))?></p>
							<h2><?php echo htmlspecialchars($post["title"]) ?></h2>
							<p><?php echo nl2br(htmlspecialchars($post["text"])) ?></p>
							<p class="bg-warning">Лайки:  <?php echo $post["likes"]?></p>
						<?php else: ?>
							<h1 class="bg-danger">Пост не найден!</h1>
						<?php endif; ?>
					</div>
				</div>
				<a class="btn btn-info" href="index.php">Назад</a>
		</div>
	</body>
</html>
