<?php
require_once("Collection/Collection.php");
require_once("Editor/Editor.php");
require_once("Game/Game.php");

use Web\GameList\Game;
use Web\GameList\Editor;
use Web\GameList\Collection;
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
$editor2 = new Editor("Ubisoft");
$editor3 = new Editor("Eidos Interactive");
$game1 = new Game("Game 1", $editor1,1);
$game2 = new Game("Game 2", $editor2,1);
$game3 = new Game("Game 3", $editor3,2);
$game4 = new Game("Game 4", $editor2,2);
$game5 = new Game("Game 5", $editor1,2);
$game6 = new Game("Game 6", $editor3,3);
$game7 = new Game("Game 7", $editor3,3);
$game8 = new Game("Game 8", $editor1,4);
$game9 = new Game("Game 9", $editor3,4);
$game10 = new Game("Game 10", $editor2,5);
$game11 = new Game("Game 11", $editor1,5);
$game12 = new Game("Game 12", $editor1,5);

$gameList = new Collection();
$gameList->add($game1);
$gameList->add($game2);
$gameList->add($game3);
$gameList->add($game4);
$gameList->add($game5);
$gameList->add($game6);
$gameList->add($game7);
$gameList->add($game8);
$gameList->add($game9);
$gameList->add($game10);
$gameList->add($game11);
$gameList->add($game12);
?>

<div>
    <?php foreach ($gameList->getList() as $element) { ?>
        <div <?php echo $element->getRating();?>">
            <div>
                <?php echo $element->getTitle(); ?>
            </div>
            <div>
                <?php echo $element->getEditor()->getName(); ?>
            </div>
            <div>
                <?php echo $element->getRating(); ?>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>