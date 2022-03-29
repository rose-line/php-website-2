<?php

require_once "../autoload.php";

if (\Model\User::get() != null && isset($_POST["title"])) {
  $post = \Model\Post::create(
    $_POST["title"],
    \Model\User::get(),
    $_POST["content"]
  );
  \View\Page::redirect("/posts/show.php?id={$post->id}");
}

$page = new \View\Page("Publication");

?>
<form method="post" action="">
  <input type="hidden" name="page" value="add" />

  <p>Titre <input type="text" name="title" /></p>
  <p>Contenu <textarea name="content"></textarea></p>

  <input type="submit" />
</form>