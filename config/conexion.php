<?php
class Conectar{
    protected $dbh;

    protected function Conexion(){
        try{
            $conectar=$this->dbh = new PDO("mysql:host=localhost;u899657396_ejemplobot","u899657396_Paulagarcia","Pjgb1268");
            return $conectar;

        }catch(Exception $e){
            print "Error BD:".$e;
            die();

    }
        
}
public function set_names(){
    return $this->dbh->query("SET NAMES 'UTF8'");
}
}
