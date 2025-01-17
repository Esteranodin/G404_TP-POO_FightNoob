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

        foreach ($datasHeroes as $dataHero) {
            $heroes[] = HeroMapper::mapToObject($dataHero);  
        }

        return $heroes;
    }



    public function findByHeroId(int $idHero): array
    {

        $sql = "SELECT `id`,`name` FROM `hero` WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $idHero
        ]);

        $datasHeroes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($datasHeroes) {
            $heroes = [];
            foreach ($datasHeroes as $dataHero) {
                $heroes[] = HeroMapper::mapToObject($dataHero);
            }

            return $heroes;
        }

        return null;
    }
}
