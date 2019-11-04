<?php
$page_content = include_template('main.php', ['items' => $ads]);
$layout_content = include_template('layout.php',[
  'content' => $page_content,
  'title' => 'YetiCave'

]);
print($layout_content);
?>
