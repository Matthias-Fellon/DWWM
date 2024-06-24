<?php
require_once "employe.class.php";
require_once "manager.class.php";

$employe = new Employe("Alice", 50000);
$manager = new Manager("Bob", 70000);

$employe->afficherDetails();
$manager->afficherDetails();
?>

<form action="" method="POST">
    <label for="nomEmploye">Ajouter un employé</label>
    <input type="text" name="nomEmploye" id="nomEmploye" required>
    <label for="salaireEmploye">Salaire de l'employé</label>
    <input type="number" name="salaireEmploye" id="salaireEmploye" required>
    <input type="submit" value="Ajouter">
</form>

<?php
if (isset($_POST["nomEmploye"]) && isset($_POST["salaireEmploye"])) {
    $nom = $_POST["nomEmploye"];
    $salaire = $_POST["salaireEmploye"];
    $nouvelEmploye = new Employe($nom, $salaire);
    $manager->ajouterEmploye($nouvelEmploye);
    echo "Employé ajouté : <br>";
    $manager->afficherDetails();
}
?>