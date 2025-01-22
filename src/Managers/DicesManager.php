<?php

// ajouter secu = enfant de securiteManager

/** Instance qui permet de créer avec la méthode resultDice les jets de dés */
final class DicesManager
{
    protected int $numberDices;
    protected int $numberFaces;
    protected int $numberRolls;


    public function getRandomInt(int $min, int $max): int
    {
        return rand($min, $max);
    }

    public function dicesRoll(int $numberDices, int $numberFaces): int
    {
        $rollResult = 0;

        for ($i = 0; $i < $numberDices; $i++) {
            $rollResult += $this->getRandomInt(1, $numberFaces);
        }

        return $rollResult;
    }

    /** Jet de dés = nombre de jetés / nombre de dés / nombre de faces */

    public function resultDices(int $numberRolls, int $numberDices, int $numberFaces): array
    {

        $result = [];

        for ($i = 0; $i < $numberRolls; $i++) {

            $result[] = $this->dicesRoll($numberDices, $numberFaces);
        }
        return $result;
    }
}
