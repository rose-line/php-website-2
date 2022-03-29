<?php

require_once "./autoload.php";

$page = new \View\Page("Liste des articles");

foreach (\Model\Post::readFirst(10) as $post) {
  echo "<h2>{$post->title}</h2>";
  echo "<p>Par <em>{$post->author}</em>... ";
  echo "<a href=\"/posts/show.php?id={$post->id}\">en savoir plus</a></p>";
}
