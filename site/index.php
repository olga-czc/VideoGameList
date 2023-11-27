<?php
require_once("Editor/Editor.php");
require_once("Game/Game.php");

use Web\GameList\Game;
use Web\GameList\Editor;
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>GameList</title>
    <meta name="author" content="Olga Cazacioc">
    <meta name="description" content="A list of video games">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
$editor1 = new Editor("CD Project");

$game1 = new Game("Game 1", $editor1,1);
echo $game1->getTitle();
echo $game1->getEditor()->getName();
echo $game1->getTitle();

?>
</body>
</html>