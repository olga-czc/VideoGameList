<?php

namespace Web\GameList;

class Game
{
    /** @var string Title of the game. */
    private string $title;
    
    /** @var int Game rating out of 5. */
    private int $rating;

    /**
     * Constructor.
     * @param string Title of the game.
     * @param int Game rating out of 5.
     */
    public function __construct(string $titre, int $rating)
    {
        $this->title = $titre;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this ->title;
    }


    public function getRating(): int
    {
        return $this ->rating;
    }
}