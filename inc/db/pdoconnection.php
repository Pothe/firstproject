<?php
 class  dbcon{
    private $host ="localhost";
    private $user="root";
    private $pass ="";
    private  $dbnm ="cms";

    private $dbh;
    private $errmsg;
    private $stmt;
    public function __construct(){
        $dsn ="mysql:host=".$this->host.";dbname=".$this->dbnm;
        $options =array(
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
            
        );

        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$options);
        }catch(Exception $err){
            $this->errmsg = $err->getMessage();
            echo $this->errmsg;

        }        
    }

    public function query($value){
        return $this->stmt = $this->dbh->prepare($value);
    }
    public function bindValue($param, $value, $type){
        return $this->stmt->bindValue($param, $value, $type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
    public function confirg(){
       $this->dbh->lastInsertId();
    }
   
    public function fetchMulti(){
        $this->execute();
        return $this->stmt->FetchAll(PDO::FETCH_ASSOC);

    }
    public function fetchsingle(){
        $this->execute();
        return $this->stmt->Fetch(PDO::FETCH_ASSOC);

    }

 }




?>