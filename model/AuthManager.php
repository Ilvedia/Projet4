<?php
require_once("model/Manager.php");
class AuthManager extends Manager
{
    //Recherche et récupération des data du membre dans la BDD
    public function getMember($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pass, pseudo, email, userLevel FROM members WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $result = $req->fetch();
        return $result;
    }
}