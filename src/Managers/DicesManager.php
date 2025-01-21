<?php

// ajouter secu = enfant de securiteManager

final class DicesManager
{
    // private int $dicesResult;


    public function getRandomInt(int $min, int $max): int
    {
        return rand($min, $max);
    }

    public function dicesRoll(int $numberDices, int $numberFaces): int
    {
        $dicesResult = 0;

        for ($i = 0; $i < $numberDices; $i++) {
            $dicesResult += $this->getRandomInt(1, $numberFaces);
        }

        return $dicesResult;
    }
}