<?php
// //EXERCICE 1
// $nombre = readline("Entrez un nombre : ");
// if($nombre > 0){
//     echo "Le nombre entré est positif\n\n";
// }elseif($nombre < 0){
//     echo "Le nombre entré est négatif\n\n";
// }

// //EXERCICE 2
// $nombre1 = readline("Entrez un premier nombre : ");
// $nombre2 = readline("Entrez un deuxième nombre : ");

// if(($nombre1<0 && $nombre2<0) || ($nombre1>0 && $nombre2>0)){
//     echo "Le produit de ces deux nombre est positif\n\n";
// }elseif(($nombre1<0 && $nombre2>0) || ($nombre1>0 && $nombre2<0)){
//     echo "Le produit de ces deux nombre est négatif\n\n";
// }

// //EXERCICE 3
// $nombre = readline("Entrez un nombre : ");
// if($nombre > 0){
//     echo "Le nombre entré est positif\n\n";
// }elseif($nombre < 0){
//     echo "Le nombre entré est négatif\n\n";
// }else{
//     echo "Le nombre entré est à la fois positif et à la fois négatif\n\n";
// }

// //EXERCICE 4
// $nombre1 = readline("Entrez un premier nombre : ");
// $nombre2 = readline("Entrez un deuxième nombre : ");

// if(($nombre1<0 && $nombre2<0) || ($nombre1>0 && $nombre2>0)){
//     echo "Le produit de ces deux nombre est positif\n\n";
// }elseif(($nombre1<0 && $nombre2>0) || ($nombre1>0 && $nombre2<0)){
//     echo "Le produit de ces deux nombre est négatif\n\n";
// }else{
//     echo "Le produit de ces deux nombre est à la fois positif et à la fois négatif\n\n";
// }

// //EXERCICE 5
// $age = readline("Inscrivez un âge pour un enfant : ");

// switch(true){
//     case ($age>=6 && $age<=7):
//         echo "L'enfant est dans la catégorie \"Poussin\".\n\n";
//         break;
    
//     case($age>=8 && $age<=9):
//         echo "L'enfant est dans la catégorie \"Pupille\".\n\n";
//         break;
    
//     case($age>=10 && $age<=11):
//         echo "L'enfant est dans la catégorie \"Minime\".\n\n";
//         break;
    
//     case($age>=12):
//         echo "L'enfant est dans la catégorie \"Cadet\".\n\n";
//         break;
    
//     default:
//         echo "L'enfant n'est pas dans une catégorie.\n\n";
//         break;
// }

// //EXERCICE 6
// $heure = readline("Entrez une heure : ");
// $minute = readline("Entrez les minutes : ");
// if($minute == 59){
//     $minute = 00;
//     if($heure == 23){
//         $heure = 00;
//     }else{
//         $heure++;
//     }
// }else{
//     $minute++;
// }
// echo "Dans une minute, il sera $heure heure(s) $minute.\n\n";


// //EXERCICE 7
// $heure = readline("Entrez les heures : ");
// $minute = readline("Entrez les minutes : ");
// $seconde = readline("Entrez les secondes : ");
// if($seconde == 59){
//     $seconde = 00;
//     if($minute == 59){
//         $minute = 00;
//         if($heure == 23){
//             $heure = 00;
//         }else{
//             $heure++;
//         }
//     }else{
//         $minute++;
//     }
// }else{
//     $seconde++;
// }
// echo "Dans une minute, il sera $heure heure(s), $minute minute(s) et $seconde seconde(s).\n\n";

// //EXERCICE 8
// $nbPhotocopies = readline("Entrez le nombre de photocopies : ");
// $prix;
// switch(true){
//     case ($nbPhotocopies <= 10):
//         $prix = $nbPhotocopies * 0.10;
//         break;
    
//     case ($nbPhotocopies <= 30):
//         $prix = 10 * 0.10 + ($nbPhotocopies - 10) * 0.09 ;
//         break;

//     case ($nbPhotocopies > 30):
//         $prix = 10 * 0.10 + 20 * 0.09 + ($nbPhotocopies - 30) * 0.08;
//         break;

//     default:
//         echo "Valeur incorrecte";
//         break;   
// }
// echo "La facture des photocopies est de $prix €.\n\n";

// //EXERCICE 9
// $genre = readline("Êtes-vous un homme ou une femme ? ");
// $age = readline("Entrez votre âge : ");

// switch($genre){
//     case "homme":
//         if($age > 20){
//             echo "Vous payez des impôts\n\n";
//         }
//         break;

//     case "femme";
//         if(($age >= 18) && ($age <=35)){
//             echo "Vous payez des impôts\n\n";
//         }
//         break;
        
//     default:
//         echo "Valeur incorrecte !\n\n";
//         break;
// }

// //EXERCICE 10
// $annee = readline("Donnez une date : ");
// if(($annee % 4) == 0){
//     echo "Cette année est bissextile\n\n";
// }else{
//     echo "Cette année n'est pas bissextile\n\n";
// }

?>