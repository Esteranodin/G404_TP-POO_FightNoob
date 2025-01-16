<?php

 class HeroesRepository extends AbstractRepository
{


    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array {

    $sql = "SELECT * FROM `hero`";
    $stmt = $this->pdo->query($sql);
    $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $heroDatas;

    }
}

?>