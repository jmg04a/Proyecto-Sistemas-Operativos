<?php 
class Database{
    private ?PDO $PDOLocal;
    private $user="root";
    private $password="";
    private $server="mysql:host=localhost;dbname=empresa";
    
    public function conectarDB(){
        try{
            $this->PDOLocal=new PDO($this->server,$this->user,$this->password);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function DesconectarDB(){
        try{
            $this->PDOLocal=null;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function Seleccionar(string $consulta){
        try{
            $resultado=$this->PDOLocal->query($consulta);
            $filas=$resultado->fetchAll(PDO::FETCH_OBJ);
            return $filas;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function ejecutar(string $cadena)
    {
        try{
            $this->PDOLocal->query($cadena);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}
?>