<?php
// PROGRAMMATION ORIENTEE OBJET 

class Etudiant
{

    private $nom;
    private $prenom;
    private $matricule;
    public $date_naissance;

    function __construct($prenom_bi, $nom_bi, $matricule_bi, $date_naissance_bi)
    {

        $this->nom = $nom_bi;
        $this->prenom = $prenom_bi;
        $this->matricule = $matricule_bi;
        $this->date_naissance = $date_naissance_bi;
    }

    public function getNom()
    {
        return  $this->nom;
    }

    public function setNom($nom_wi)
    {
        if (is_string($nom_wi) && strlen($nom_wi) < 25) {
            $this->nom = $nom_wi;
        } else {
            echo "Veuiller saisir un nom en lettres et inférieur à 25 caractères. ";
        }
    }

    public function getPrenom()
    {
        return  $this->prenom;
    }

    public function setPrenom($prenom_wi)
    {
        if (is_string($prenom_wi) && strlen($prenom_wi) < 26) {
            $this->prenom = $prenom_wi;
        } else {
            echo "Veuiller saisir un prenom en lettres et inférieur à 25 caractères. ";
        }
    }
    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule_wi)
    {
        if (is_string($matricule_wi) && strlen($matricule_wi) < 11) {
            $this->matricule = $matricule_wi;
        } else {
            echo "Veuiller saisir une matricule inférieure ou égale à 10 caractères. ";
        }
    }

    public function getDate_naiss($date_naiss_wi)
    {
        return $this->date_naissance;
    }

    public function setDate_naiss($date_naiss_wi)
    {
        if (strtotime($date_naiss_wi)) {
            $this->date_naissance = $date_naiss_wi;
        } else {
            echo "Veuiller entrez votre date de naissance.";
        }
    }

    public function presenter()
    {
        echo "<br> Salam le Monde, <br>
        Je suis $this->prenom $this->nom. <br>
        Mon Numéro de matricule c'est $this->matricule. <br>
        Ma date de naissance c'est $this->date_naissance.
        ";
    }

    public function faire_cours()
    {
        echo "<br> Assalamou Aleykoum, <br>
        Je m'appelle $this->prenom $this->nom. <br>
        Je suis des cours de Dévellopement web à Simplon.
        ";
    }

    public function faire_evaluation()
    {
        echo "<br> Bonjour à tous, <br>
        Mon nom est $this->prenom $this->nom. <br>
        Apres avoir assimilée une compétence nous faisons des évaluations individuelles appelées briefs. 
        ";
    }
}

echo ' <h1> POO in PHP</h1><hr>';
echo ' <b><u>Mini Projet: 25 Octobre 2023<br></u></b>';

echo "<br>";
echo ' <b><u>Partie 1: Classe Parent</u></b>';

echo "<br><br>";
echo ' <b><u>Les étudiants</u></b>';
echo "<br><br>";
$etudiant1 = new Etudiant("Abibatou", "Fall", "4t6gf3D4Y", "2000 - 05 - 30");
echo "<u>Presentation:</u>";
$etudiant1->presenter();

echo '<br>';
genere_separateur("_");
echo '<br>';

echo "<u><br><br>Utilisation de l'accesseur SetNom pour modifier le nom de l'étudiante 1:</u>";
$etudiant1->setNom("Sall");
$etudiant1->presenter();
echo "<br><br>";

genere_separateur("*");
echo '<br><br>';

$etudiant2 = new Etudiant("Ahmed", "Dia", "7f4yf8G", "1995 - 02 - 10");
echo "<u>Cours:</u>";
$etudiant2->faire_cours();
echo "<br><br>";

genere_separateur("x");
echo '<br><br>';

$etudiant3 = new Etudiant("Anthony", "Smith", "j5k7hf3", '1990 - 04 - 06');
echo "<u>Evaluation:</u>";
$etudiant3->faire_evaluation();

echo '<br>';
genere_separateur("_");
echo '<br>';

echo "<u><br><br>Utilisation de l'accesseur SetDate_naiss pour modifier le nom de l'étudiant 3:</u>";
$etudiant3->setDate_naiss("1996-04-06");
$etudiant3->presenter();
echo '<br><br>';

genere_separateur("v");
echo '<br>';

interface ProfesseurInterface {
    public function coacher_etudiant();
    public function gerer_planning();
    public function sauto_evaluer();

}

class Professeur extends Etudiant implements ProfesseurInterface
{

    private $voiture;
    private $salaire;
    private $specialite;
    private $date_evaluation;


    public function __construct($nom_bi, $prenom_bi, $matricule_bi, $date_naissance_bi, $voiture_bi, $salaire_bi, $specialite_bi, $date_evaluation_bi)

    {
        parent::__construct($nom_bi, $prenom_bi, $matricule_bi, $date_naissance_bi);
        $this->voiture = $voiture_bi;
        $this->salaire = $salaire_bi;
        $this->specialite = $specialite_bi;
        $this->date_evaluation = $date_evaluation_bi;
    }


    public function getVoiture()
    {
        return  $this->voiture;
    }

    public function setVoiture($voiture_wi)
    {
        if (is_bool($voiture_wi) || strlen($voiture_wi) < 6) {
            $regex = '/^(oui|non)$/i';
            if (preg_match($regex, $voiture_wi)) {
                $this->voiture = $voiture_wi;
            }
        } else {
            echo "Veuiller faire un choix entre oui et non. ";
        }
    }

    public function getSalaire()
    {
        return  $this->salaire;
    }

    public function setSalaire($salaire_wi)
    {
        if (is_numeric($salaire_wi)) {
            $this->salaire = $salaire_wi;
        } else {
            echo "Veuiller saisir un montant en FCFA. ";
        }
    }

    public function getSpecialite()
    {
        return  $this->specialite;
    }

    public function setSpecialite($specialite_wi)
    {
        if (is_string($specialite_wi)) {
            $this->specialite = $specialite_wi;
        } else {
            echo "Veuiller saisir votre specialité en lettres et inférieure à 25 caractères. ";
        }
    }

    public function getDate_evaluation()
    {
        return  $this->date_evaluation;
    }

    public function setDate_evaluation($date_evaluation_wi)
    {
        if (strtotime($date_evaluation_wi)) {
            $this->date_evaluation = $date_evaluation_wi;
        } else {
            echo "Veuiller saisir une date d'evaluation. ";
        }
    }

    public function evaluer_etudiant()
    {
        $date_evaluation = date('Y-m-d');
        echo " <br> Bonsoir chers partenaires <br>
        Je suis {$this->getPrenom()} {$this->getNom()}, professeur(coach) à Simplon. <br>
        Nous évaluons les étudiants après chaque compétence acquises. <br>
        D'ailleurs le $this->date_evaluation nous avons faire un atelier sur la POO.
        ";
    }

    public function coacher_etudiant(){

    }
    public function gerer_planning() {

    }
    public function sauto_evaluer(){

    }
}

echo "<br><br>";
echo ' <b><u>Partie 2: Classe Enfant</u></b>';
echo "<br><br>";
echo ' <b><u>Les professeurs</u></b>';
echo "<br><br>";
$professeur1 = new Professeur("Salimata", "Hane", "j9f689sZ", "1987-07-02", false,  350000, "Frontend", "2023-10-30");
echo "<u>Professeur 1:</u>";
$professeur1->presenter();

echo '<br>';
genere_separateur("_");
echo '<br><br>';

echo "<u>Utilisation de l'accesseur SetMatricule pour modifier le nom du professeur 2:</u>";
$professeur1->setMatricule("5hh89k2m");
$professeur1->presenter();
echo "<br><br>";

$professeur1->evaluer_etudiant();
echo "<br><br>";



genere_separateur("^");
echo '<br>';

$professeur2= new Professeur("Fanta", "SY", "j1h7h9sZ", "1985-09-12", true,  570000, "Fullstack", "2023-10-27");
echo "<u>Professeur 2:</u>";
$professeur2->presenter();
echo "<br><br>";
$professeur2->evaluer_etudiant();
echo '<br><br>';

genere_separateur("_");
echo '<br><br>';
echo "<u>Utilisation de l'accesseur SetPrenom pour modifier le nom du professeur 2:</u>";
$professeur2->setPrenom("Aminata");
$professeur2->evaluer_etudiant();




// J'ai créé une fonction qui génère des séparateurs. 
function genere_separateur($separ)
{
    for ($i = 0; $i < 70; $i++) {
        echo "$separ";
    }
}
echo '<br>';
genere_separateur("_");

