<?php

class HeroMapper implements MapperContract
{
    public static function mapToObject(array $datasHero): Hero
    {
        return new Hero(
            $datasHero["id"],
            $datasHero["name"],
            $datasHero["PV"],
            $datasHero["img_path"],
        );
    }

    public static function mapToArray(Hero $hero)
    {
        return [
            'name' => $hero->getName(),
            'health' => $hero->getHealth(),
        ];
    }
}
