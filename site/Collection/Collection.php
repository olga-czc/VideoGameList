<?php

namespace Web\GameList;

class Collection
{
    /** @var Game[] Video game list. */
    private array $list;

    /**
     * Constructer.
     */
    public function __construct()
    {
        $this->list = array();
    }

    public function add(Game $game)
    {
        $this->list[]=$game;
    }

    public function getList(): array
    {
        return $this->list;
    }
}
