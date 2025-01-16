<?php
require_once "../../utils/autoloader.php";

$testSecu = new HeroService();
$testSecu -> isValid($_POST["pseudo"]);

?>