<?php
require_once("GameGroup/Collection/Collection.php");
require_once("GameGroup/Editor/Editor.php");
require_once("GameGroup/Game/Game.php");

use Web\GameList\Game;
use Web\GameList\Editor;
use Web\GameList\Collection;
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>GameList</title>
    <meta name="author" content="Olga Cazacioc">
    <meta name="description" content="A list of video games">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css?v=1.0.0">
</head>
<header>
    <div class="container p-3">
        <?php if(empty($_SESSION)): ?>
            <a href="Connection/login.php">Login</a>
        <?php else: ?>
            <a href="Connection/logout.php">Logout</a>
        <?php endif;
        ?>
    </div>
</header>
<body>
<?php
$editor1 = new Editor("CD Project");
$editor2 = new Editor("Ubisoft");
$editor3 = new Editor("Eidos Interactive");
$game1 = new Game("Game 1", $editor1,1);
$game2 = new Game("Game 2", $editor2,3);
$game3 = new Game("Game 3", $editor3,2);
$game4 = new Game("Game 4", $editor2,5);
$game5 = new Game("Game 5", $editor1,2);
$game6 = new Game("Game 6", $editor3,3);
$game7 = new Game("Game 7", $editor3,1);
$game8 = new Game("Game 8", $editor1,4);
$game9 = new Game("Game 9", $editor3,4);
$game10 = new Game("Game 10", $editor2,5);
$game11 = new Game("Game 11", $editor1,3);
$game12 = new Game("Game 12", $editor1,4);

$gameList = new Collection();
$gameList->addGame($game1);
$gameList->addGame($game2);
$gameList->addGame($game3);
$gameList->addGame($game4);
$gameList->addGame($game5);
$gameList->addGame($game6);
$gameList->addGame($game7);
$gameList->addGame($game8);
$gameList->addGame($game9);
$gameList->addGame($game10);
$gameList->addGame($game11);
$gameList->addGame($game12);
?>

<div class="container">
    <div>
        <h1>My video game collection</h1>
    </div>
    <?php foreach ($gameList->getList() as $element) { ?>
        <div class="row border border-dark m-1 color<?php echo $element->getRating();?>">
            <div class="col-sm-4">
                <?php echo $element->getTitle(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $element->getEditor()->getName(); ?>
            </div>
            <div class="col-sm-4">
                <?php echo $element->getRating(); ?>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>