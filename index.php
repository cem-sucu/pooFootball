<?php 

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});


//les pays
$pays1 = new Pays("France");
$pays2 = new Pays("Allemagne");
$pays3 = new Pays("Espagne");
$pays4 = new Pays("Angleterre");
$pays5 = new Pays("Italie");

// equipe FR
$equipe1 = new Equipe("PSG", 1900, $pays1);
$equipe2 = new Equipe("Racing Club Strasbourg", 1901, $pays1);
$equipe3 = new Equipe("Monaco", 1800, $pays1);
//equipe All
$equipe4 = new Equipe("Dortmund", 2000, $pays2);
$equipe5 = new Equipe("Bayern Minich", 2000, $pays2);
$equipe6 = new Equipe("Bayern Minich", 2000, $pays2);
//equipe ES
$equipe7 = new Equipe("Real Madrid", 1903, $pays3);
$equipe8 = new Equipe("Barcelone", 1890, $pays3);
$equipe9 = new Equipe("Atletico Madrid", 1909, $pays3);
// equipe EN
$equipe10 = new Equipe("Manchester City", 1901, $pays4);
$equipe11 = new Equipe("Manchester Unioted", 1908, $pays4);
$equipe12 = new Equipe("Liverpool", 1900, $pays4);
//equipe IT
$equipe13 = new Equipe("Milan AC", 1900, $pays4);
$equipe14 = new Equipe("Juventus", 1900, $pays4);
$equipe15 = new Equipe("Inter Milan", 1900, $pays4);


//les joeur
$joueur1 = new Joueur("Française", "Mbappé", "Kilian", "2000-05-05");
$joueur2 = new Joueur("Française", "Zidane", "Zinedine", "1975-01-01");
$joueur3 = new Joueur("Allemenad", "Reus", "Marco", "1992-01-01");
$joueur4 = new Joueur("Allemand", "Kroos", "Tony", "1985-01-01");
$joueur5 = new Joueur("Espagnol", "Ramos", "Sergio", "1986-01-01");
$joueur6 = new Joueur("Espagnol", "Andrès", "Iniesta", "1986-01-01");
$joueur7 = new Joueur("Anglaise", "Saka", "Anit", "1986-01-01");
$joueur8 = new Joueur("Anglaise", "Grealish", "Jack", "1986-01-01");
$joueur9 = new Joueur("Italienne", "Buffon", "Geo", "1986-01-01");
$joueur10 = new Joueur("Italienne", "Gattuiso", "David", "1986-01-01");


$relation1 = new Posseder($equipe1, $joueur1, '2020-07-07');

//ajouter les equipe de France
$pays1->ajouterEquipe($equipe1);
$pays1->ajouterEquipe($equipe2);
$pays1->ajouterEquipe($equipe3);

//ajouter equipe en Allemgane
$pays2->ajouterEquipe($equipe4);
$pays2->ajouterEquipe($equipe5);
$pays2->ajouterEquipe($equipe6);

//ajout equipe espagne
$pays3->ajouterEquipe($equipe7);
$pays3->ajouterEquipe($equipe8);
$pays3->ajouterEquipe($equipe9);

//ajout euipe angleterre
$pays4->ajouterEquipe($equipe10);
$pays4->ajouterEquipe($equipe11);
$pays4->ajouterEquipe($equipe12);
//ajoit equipe italie

$pays5->ajouterEquipe($equipe13);
$pays5->ajouterEquipe($equipe14);
$pays5->ajouterEquipe($equipe15);

//afficher toute les equipe de france
$pays1->afficherEquipes();
//Allemagne
$pays2->afficherEquipes();
//espagne
$pays3->afficherEquipes();
//A,ngleterre
$pays4->afficherEquipes();
//italie
$pays5->afficherEquipes();





?>