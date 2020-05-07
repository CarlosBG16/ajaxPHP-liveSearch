<?php

/*
 CLASSE: Search
 ATRIB: CONFIG(ARRAY) PDO(PDO) CHAVE(STRING)
 METODOS: colorir(string S): string , getData() : string
 Author: Carlos Bumba
 At: 27-04-2020 AO
*/

class search {

//PDO INFO
private $config = array(
'HOST' => "localhost",
'DB' => "teste",
'USER' => "root",
'PSWD' => ""
);



private $chave; //@chave - string
private $PDO; //@DB - PDO instance


public function __construct(string $chave) {

//Retirando Símbolos e carácteres perigosos 
 $this->chave = trim(htmlspecialchars(stripslashes($chave)));
  $this->chave = (string) preg_replace("/[^A-Za-z0-9\s]/","",$this->chave);
  
 try {
  $this->PDO = new PDO("mysql:dbname=".$this->config["DB"].';host='.$this->config["HOST"],
   $this->config["USER"],
    $this->config["PSWD"],
  );
  
   } catch(PDOException $erro) {
      die('Erro: ' . $erro->getMessage());
 }

//Next Step
$this->getData();
}



public function colorir(string $string) : string {

  if(strpos($string,$this->chave) >= 0) {
    $boldChave = '<b class="match">'. $this->chave .'</b>';
     return str_replace($this->chave, $boldChave , $string);
      } else {
       return $string;
    }
}



public function getData() {

$SQL = "SELECT * FROM USER WHERE NOME LIKE :key ;";

 if($prepared = $this->PDO->prepare($SQL)) {

   $key = $this->chave . '%';

     $prepared->bindParam(':key', $key , PDO::PARAM_STR , 15);

       if($prepared->execute()) {

        while( $dado = $prepared->fetch(PDO::FETCH_ASSOC)) {
     
         echo  '<a href="#'.$dado["ID"].'">' . $this->colorir($dado["NOME"]) ."</a><br>";
        }
     }
   }
 }
 

}




new search($_POST['key']);


?>