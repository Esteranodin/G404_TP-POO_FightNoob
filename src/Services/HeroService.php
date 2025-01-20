<?php 

final class HeroService 
{

    public function isValid (string $pseudo) : string {
    if (!isset($pseudo) || empty(trim($pseudo))) {
        header("Location: ../../public/choiceHero.php?error=1");
        exit;
    }

    $pseudoSecu = htmlspecialchars(trim($pseudo));

  // rajouter tout le code secu de validation de form

    return $pseudoSecu;
    
}


}