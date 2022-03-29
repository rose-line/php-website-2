<!-- classes/View/headers.php -->
<html>

<head>
  <title><?php echo $title; ?></title>
</head>

<body>
  <h1><?php echo $title; ?></h1>
  <?php if (\Model\User::get() != null) { ?>
    <a href="/users/logout.php">Se Déconnecter</a>
    <a href="/posts/add.php">Publier</a>
  <?php } else { ?>
    <a href="/users/login.php">Se connecter</a>
    <a href="/users/register.php">S'enregistrer</a>
  <?php } ?>