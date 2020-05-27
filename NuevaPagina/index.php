<?php


  class conn{
    public $BD = "";
    public $user = "";
    public $pass = "";
    public $Host = "";
    public $Mensaje = "";

    public $Conection;
    public function __construct(){
      $this -> $Mensaje = "";
    }

    public function ExecSql($SQL){
      $this -> $Conection=mysql_connect(this -> $Host,this -> $user,this -> $pass) or die(mysql_error());
      $NombreBD = mysql_select_db(this -> $BD,this -> $Conection) or die(mysql_error());
      $Resul = mysqli_query($SQL) or die(mysqk_error());
    }
  }

?>
