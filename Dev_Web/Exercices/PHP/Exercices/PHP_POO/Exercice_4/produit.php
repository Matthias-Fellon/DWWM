<?php
class Produit
{
    //Attributs
    private string $nom;
    private float $prix;
    private int $quantite;

    //Constructeur
    public function __construct($nom, $prix, $quantite) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    //Getter
    public function getNom() {return $this->nom;}
    public function getPrix() {return $this->prix;}
    public function getQuantite() {return $this->quantite;}

    //Setter
    public function setNom($nom) {$this->nom = $nom;}
    public function setPrix($prix) {$this->prix = $prix;}
    public function setQuantite($quantite) {$this->quantite = $quantite;}

    //Methodes
    public function afficherProduit() {
        echo "Produit : $this->nom <br>"
            . "Prix : $this->prix €<br>"
            . "Quantité en stock : $this->quantite <br>";
    }

    public function ajouterStock($quantiteAjoutee) {
        $this->quantite += $quantiteAjoutee;
    }

    public function retirerStock($quantiteRetiree) {
        $this->quantite -= $quantiteRetiree;
    }
}
?>