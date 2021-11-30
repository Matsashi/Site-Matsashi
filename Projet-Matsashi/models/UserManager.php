<?php
require "models/Model.php";
class UserManager extends Model{
    private $userList;
    public function getTable(){
        $sql = "SELECT * FROM utilisateur";
        $req = $this->getDB()->prepare($sql);
        $req->execute();
        $data = $req->fetchALL(PDO::FETCH_OBJ);
        return $data;
    }
    public function loadingUsers(){
        $users = $this->getTable();
        foreach($users as $user){
            $add = new User($user->pseudo_utilisateur, $user->password_utilisateur);
            $this->addUser($add);
        }
    }
    public function addUser($newUser){
        $this->userList[] = $newUser;
    }
    public function getUsers()
    {
        return $this->userList;
    }
    public function connexionUser($login, $password){
        $result_message = null;
        // if(!empty($_POST['login']) && !empty($_POST['password'])){
            if($result_message==null){
                $data = $this->getTable();
                foreach ($data as $valeur) {
                    if($login == $valeur->pseudo_utilisateur){
                        if(password_verify($password, $valeur->password_utilisateur)){
                            $result_message="OK";
                        }else{
                            $result_message = "mdp";
                        }
                        break;
                    }else{
                        $result_message = "existe";
                    }
                }     
            }
            if (!$data)
            {
                $result_message="Erreur";
            }
        // }
        if($result_message == "OK"){
            $log = $login;
            // setcookie('pseudo',$log,time()+3600,null,null,true,true);
            $_SESSION["pseudo"]= $log;
            // header("location: ".URL."admin/panel");
        // }else{
        // header("location: ".URL."admin");
        // }
        }
        return $result_message;
    }
}