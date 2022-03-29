<?php

require_once "../autoload.php";

$post = \Model\Post::read($_GET["id"]);

if (\Model\User::get() != $post->author && isset($_POST["confirm"])) {
  $post->delete();
  \View\Page::redirect("/post/index.php");
}

$page = new \View\Page("Publication");

?>
<form method="post" action="">
  <input type="hidden" name="page" value="add" />
  <p>Êtes-vous sûr de vouloir supprimer cet article ?</p>
  <input value="Oui" name="confirm" type="submit" />
</form>