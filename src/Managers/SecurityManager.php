<?php
require_once "../../utils/autoloader.php";

$testSecu = new HeroService();
$testSecu -> isValid($_POST["pseudo"]);

?>

<!-- A APPELER SUR PAGE CONCERNEES -->


<!-- faire plutôt un process -->