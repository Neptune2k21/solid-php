<?php

require_once 'MusicType.php';

class Mp3 extends MusicType
{
    public function listen(): string
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}
