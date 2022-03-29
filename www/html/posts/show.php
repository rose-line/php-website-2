<?php

require_once "../autoload.php";

$post = \Model\Post::read($_GET["id"]);

$page = new \View\Page($post->title);
echo "<p>Par <em>{$post->author}</em></p>";
echo $post->content;

if (\Model\User::get() != null) {
  echo "<p><a href=\"/posts/del.php?id={$post->id}\">Supprimer</a></p>";
}
