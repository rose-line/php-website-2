<?php

require_once "../autoload.php";

if (isset($_POST["username"])) {
  \Model\User::register($_POST["username"], $_POST["password"]);
  \View\Page::redirect($_SERVER['HTTP_REFERER']);
}

$page = new \View\Page("Enregistrement");

?><form method="post" action="">
  <p>Nom Utilisateur <input type="text" name="username" /></p>
  <p>Mot de passe <input type="password" name="password" /></p>
  <input type="submit" />
</form>