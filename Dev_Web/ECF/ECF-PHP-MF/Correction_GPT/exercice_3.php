<?php
// TODO faire l'affichage
class Classe {
    private $eleves = [];

    public function demanderNotesInitiales() {
        $nbEleves = $this->saisirNombre("Entrez le nombre d'élèves dans la classe : ");
        for ($i = 0; $i < $nbEleves; $i++) {
            $nom = readline("Entrez le nom de l'élève " . ($i + 1) . " : ");
            $note = $this->saisirNote();
            $this->eleves[$nom] = [$note];
        }
    }

    public function ajouterNote() {
        $nom = readline("Entrez le nom de l'élève : ");
        if (isset($this->eleves[$nom])) {
            $note = $this->saisirNote();
            $this->eleves[$nom][] = $note;
        } else {
            echo "Élève non trouvé.\n";
        }
    }

    public function supprimerEleve() {
        $nom = readline("Entrez le nom de l'élève à supprimer : ");
        if (isset($this->eleves[$nom])) {
            unset($this->eleves[$nom]);
            echo "Élève supprimé.\n";
        } else {
            echo "Élève non trouvé.\n";
        }
    }

    public function calculerMoyenneClasse() {
        $totalNotes = 0;
        $nbNotes = 0;
        foreach ($this->eleves as $notes) {
            $totalNotes += array_sum($notes);
            $nbNotes += count($notes);
        }
        $moyenne = $totalNotes / $nbNotes;
        echo "La moyenne de la classe est : " . number_format($moyenne, 2) . "\n";
        return $moyenne;
    }

    public function trouverNotesExtremes() {
        $notes = [];
        foreach ($this->eleves as $nom => $notesEleve) {
            foreach ($notesEleve as $note) {
                $notes[$nom][] = $note;
            }
        }

        if (!empty($notes)) {
            $eleveMax = array_keys($notes, max($notes))[0];
            $eleveMin = array_keys($notes, min($notes))[0];
            echo "Élève ayant la note la plus élevée : $eleveMax avec " . max($notes) . "\n";
            echo "Élève ayant la note la plus basse : $eleveMin avec " . min($notes) . "\n";
        } else {
            echo "Aucune note enregistrée.\n";
        }
    }

    public function afficherElevesAuDessusMoyenne() {
        $moyenneClasse = $this->calculerMoyenneClasse();
        echo "Élèves au-dessus de la moyenne :\n";
        foreach ($this->eleves as $nom => $notes) {
            $moyenneEleve = array_sum($notes) / count($notes);
            if ($moyenneEleve > $moyenneClasse) {
                echo "$nom avec une moyenne de " . number_format($moyenneEleve, 2) . "\n";
            }
        }
    }

    public function trierEleves($ordre = 'asc') {
        uasort($this->eleves, function ($a, $b) use ($ordre) {
            $moyenneA = array_sum($a) / count($a);
            $moyenneB = array_sum($b) / count($b);
            if ($moyenneA == $moyenneB) {
                return 0;
            }
            if ($ordre === 'asc') {
                return ($moyenneA < $moyenneB) ? -1 : 1;
            } else {
                return ($moyenneA > $moyenneB) ? -1 : 1;
            }
        });
        $this->afficherTableauNotes();
    }

    public function afficherTableauNotes() {
        echo "Tableau des notes :\n";
        foreach ($this->eleves as $nom => $notes) {
            echo "$nom : " . implode(", ", $notes) . "\n";
        }
    }

    public function menu() {
        do {
            echo "\nMenu :\n";
            echo "1. Ajouter une note\n";
            echo "2. Supprimer un élève\n";
            echo "3. Calculer la moyenne de la classe\n";
            echo "4. Trouver la note la plus élevée et la note la plus basse\n";
            echo "5. Afficher les élèves au-dessus de la moyenne générale\n";
            echo "6. Trier et afficher le tableau des notes\n";
            echo "7. Afficher le tableau des notes\n";
            echo "8. Quitter\n";

            $choix = readline("Choisissez une option : ");
            switch ($choix) {
                case 1:
                    $this->ajouterNote();
                    break;
                case 2:
                    $this->supprimerEleve();
                    break;
                case 3:
                    $this->calculerMoyenneClasse();
                    break;
                case 4:
                    $this->trouverNotesExtremes();
                    break;
                case 5:
                    $this->afficherElevesAuDessusMoyenne();
                    break;
                case 6:
                    $ordre = readline("Entrez 'asc' pour un tri croissant ou 'desc' pour un tri décroissant : ");
                    $this->trierEleves($ordre);
                    break;
                case 7:
                    $this->afficherTableauNotes();
                    break;
                case 8:
                    echo "Au revoir !\n";
                    break;
                default:
                    echo "Option invalide. Veuillez réessayer.\n";
            }
        } while ($choix != 8);
    }

    private function saisirNombre($message) {
        do {
            $nombre = readline($message);
            if (is_numeric($nombre) && $nombre > 0) {
                return (int)$nombre;
            }
            echo "Veuillez entrer un nombre entier positif.\n";
        } while (true);
    }

    private function saisirNote() {
        do {
            $note = readline("Entrez la note (entre 0 et 20) : ");
            if (is_numeric($note) && $note >= 0 && $note <= 20) {
                return (float)$note;
            }
            echo "Veuillez entrer une note valide (entre 0 et 20).\n";
        } while (true);
    }
}

$classe = new Classe();
$classe->demanderNotesInitiales();
$classe->menu();
?>