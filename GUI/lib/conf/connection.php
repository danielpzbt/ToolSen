<?php

   class Connection{

    private $server;
    private $user;
    private $pass;
    private $database;
    private $port;
    private $link;

    function __construct(){

        $this->setConnect();
        $this->connect();
    }
    private function setConnect(){

        require_once 'conf.php'; // require_once: mata el proceso, include_once =sigue derecho.
        $this->server=$server;
        $this->user=$user;
        $this->pass=$pass;
        $this->database=$database;
        $this->port=$port;
        
    }
    private function connect(){

        //1: server
        //2: user
        //3: pass
        //4: database
        $this->link=mysqli_connect($this->server,$this->user,$this->pass,$this->database);

        if(!$this->link){
            die(mysqli_error($this->link));
        }else{

            //echo "¡Conexión Exitosa!";
        }
    }
    public function getConnect(){

        return $this->link;

    }
    public function close(){

        mysqli_close($this->link);
    }

   }

?>