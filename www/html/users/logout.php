<?php // html/users/logout.php

require_once "../autoload.php";

if (isset($_POST["confirm"])) {
  \Model\User::logout();
  \View\Page::redirect($_SERVER['HTTP_REFERER']);
}

$page = new \View\Page("Connexion");

?><form method="post" action="">
  <p>Êtes vous sûr de vouloir vous déconnecter ?</p>
  <input type="submit" name="confirm" />
</form>