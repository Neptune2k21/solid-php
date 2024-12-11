<?php

require_once 'MusicType.php';

class Ogg extends MusicType
{
    public function listen(): string
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}
