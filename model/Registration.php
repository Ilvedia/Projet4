<?php
require_once("model/Manager.php");
class UserManager extends Manager
{
    //passage en parametre des valeurs du formulaire et du mdp haché
    public function addMember($pseudo, $pass_hash, $email)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        //On rempli la BDD avec les infos du formulaire
        $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hash,
            'email' => $email));
    }

    public function checkPseudo($pseudoToCheck)
    {
        $db = $this->dbConnect();
        //requete retourne 1 si pseudo existe
        $req = $db->prepare('SELECT COUNT(*) AS pseudo FROM members WHERE pseudo = ?');
        $req->execute(array($pseudoToCheck));
        $pseudo = $req->fetch();

        return $pseudo['pseudo'];
    }

    public function pushMember($pseudo, $pass_hash, $email)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO members(pseudo, pass, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        //On rempli la BDD avec les infos du formulaire
        $req->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hash,
            'email' => $email));
    }
}
