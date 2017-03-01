<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($user as $key => $value): ?>
		<?php echo $value['username']; ?>
	<?php endforeach ?>
</body>
</html>