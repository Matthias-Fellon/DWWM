<?php
require_once "manager.class.php";

    $employeAlice = new Employe("Alice", 50000);
    $managerBob = new Manager("Bob", 70000, $employeAlice);

    $employeAlice->afficherDetails();
    $managerBob->afficherDetails();

?>