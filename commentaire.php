<?php

$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$articleId = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$query->execute([$articleId]);
$article = $query->fetch();

$query = $pdo->prepare("SELECT * FROM commentaires WHERE article_id = ?");
$query->execute([$articleId]);
$commentaires = $query->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<title><?= $article['title'] ?></title>
</head>
<body>

<h1><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>

<h2>Commentaires</h2>

<?php foreach ($commentaires as $commentaire): ?>
<div>
<p><?= $commentaire['content'] ?></p>
</div>
<?php endforeach; ?>

<a href="articles.php">Retour à la liste des articles</a>

</body>
</html>