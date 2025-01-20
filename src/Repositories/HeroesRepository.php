<?php

class HeroesRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }


    public function findAllHeroes(): array
    {
        $sql = "SELECT * FROM hero";
        $stmt = $this->pdo->query($sql);
        $datasHeroes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($datasHeroes as $dataHeroes) {
            $heroes[] = HeroMapper::mapToObject($dataHeroes);  
        }

        return $heroes;
    }



    public function findByHeroId(int $idHero): ?Hero
    {

        $sql = "SELECT `id`,`name` FROM `hero` WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $idHero
        ]);

        $datasHero = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($datasHero) {
            $hero = [];
            foreach ($datasHero as $dataHero) {
                $hero[] = HeroMapper::mapToObject($dataHero);
            }

            return $hero;
        }

        return null;
    }


    // public function create(Hero $hero) {

    //     $sql = "INSERT INTO hero (name) VALUES (:name)";
    //     $stmt = $this->pdo->prepare($sql);
        
    // }
}
