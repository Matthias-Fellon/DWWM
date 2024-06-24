<?php
require_once "manager.class.php";

$employeAlice = new Employe("Alice", 50000);
$managerBob = new Manager("Bob", 70000);

$managerBob->ajouterEmploye($employeAlice);

echo $employeAlice->afficherDetails();
echo $managerBob->afficherDetails();
?>