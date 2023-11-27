<?php

namespace Web\GameList;

use Cegep\Web4\GestionJeu\Editeur;

class Game
{
    /** @var string Title of the game. */
    private string $title;

    /** @var Editor Editor of the game. */
    private Editor $editor;

    /** @var int Game rating out of 5. */
    private int $rating;

    /**
     * Constructor.
     * @param string Title of the game.
     * @param Editor Editor of the game.
     * @param int Game rating out of 5.
     */
    public function __construct(string $titre, Editor $editor, int $rating)
    {
        $this->title = $titre;
        $this->editor = $editor;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this ->title;
    }

    public function getEditor(): Editor
    {
        return $this ->editor;
    }

    public function getRating(): int
    {
        return $this ->rating;
    }
}