<?php

namespace Web\GameList;

class Editor
{
    /** @var string Name of the editor. */
    private string $name;

    /**
     * Constructor.
     * @param string $name Name of the editor.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this ->name;
    }
}
