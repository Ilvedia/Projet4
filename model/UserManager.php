<?php
require_once("Manager.php");

class UserManager extends Manager
{
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

    public function listUsers()
    {
        $db = $this->dbConnect();
        $users = $db->query('SELECT id, pseudo, pass, email, userLevel, DATE_FORMAT(inscription_date, \'%d/%m/%Y \') AS inscription_date_fr FROM members');
        return $users;
    }

    public function userDelete($userId)
    {
        $db = $this->dbConnect();
        $user = $db->prepare('DELETE FROM members WHERE id='.$userId);
        $affectedLines = $user->execute(array($userId));
        return $affectedLines;
    }
}
