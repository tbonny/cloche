<?php 
    include('database.php'); // On include le fichier contenant la connexion à la Base de données

    class user 
    {
        private $_db;
        private $_login;
        private $_password;
        public function __construct($db)
        {      
            $this->_db = $db;
        }

 

        public function Connexion($login, $password)
        {   // Permet à l'utilisateur de se connecter au site
            $con = $this->_db->prepare("SELECT * FROM user WHERE user = :lolo AND  password = :pass"); // Requête qui vérifie les informations de l'utilisateur lors de sa connexion
            $con->execute([
                'lolo' => $login,
                'pass' => $password
            ]);
            $con = $con->fetch();
        
         
            $this->_login = $con['user'];
            $this->_password = $con['password'];
            
        }
        public function compare($login, $password)
        {   

            if ($login == $this->_login) 
            {
                
                if ($password == $this->_password) 
                {
                    
                    return true;
                }
                
            }
        return false;
        }

        
        public function getLogin()
        {   
            return $this->_login;
        }

        public function getPassword()
        {   
            return $this->_password;
        }

      
    }
?>


