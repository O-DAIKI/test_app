<?php
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>編集</title>
</head>
<body>
  <form action="store.php" method="post">
    <input type="hidden" name="id" value="<?= e($_GET['id']); ?>">
    <input type="text" name="content" value="<?= e(getSelectedTodo($_GET['id'])); ?>">
    <input type="submit" value="更新">
  </form>
  <div>
    <a href="index.php">一覧へもどる</a>
  </div>
</body>
</html>