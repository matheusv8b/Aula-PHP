<?php
//AULA 1 

    //class Pessoa {
        //public $nome;
        //public $idade;

        //public function Falar() {
            //echo $this->nome." de ".$this->idade." Anos, Acabou de Falar <br>";
        //}
    //}

    //$matheus = new Pessoa();
    //$matheus->nome = "Matheus Henrique de Jesus";
    //$matheus->idade = 24;
    //$matheus->Falar();


    //Aula 2

    //class Login {
    //    private $email;
     //   private $senha;
       // private $nome;
       // public function __construct($email, $senha, $nome) {
       //     $this->nome = $nome;
        //    $this->setEmail($email);
        //    $this->setSenha($senha);
        //}

        //public function getNome() {
       //     return $this->nome;
       // }

        //public function getEmail() {
        //    return $this->email;
        //}
        //public function setEmail($e) {
        //    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        //    $this->email = $email;
        //}
        //public function getSenha() {
         //   return $this->senha;
        //}
        //public function setSenha($s) {
         //   $this->senha = $s;
        //}

        //public function Logar() {
          //  if($this->email == "teste@teste.com" and $this->senha == "123456"):
            //    echo "Logado com Sucesso!";
            //else:
              //  echo "Dados inválidos";
            //endif;
        //}
    //}

    //$logar = new Login("teste@teste.com", "123456", "Matheus de Jesus");
    //$logar->setEmail("teste//()@teste.com");
    //$logar->setSenha("123456");
    //$logar->Logar();
    //echo "<br>";
    //echo $logar->getNome();
    




    //Aula 3 Herança
class veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Acelerar(){
        echo "Acelerou <br>";
    }

    public function Freiar() {
        echo "<br><br> Freiou <br>";
    }
}



class Carro extends Veiculo {   

    public function ligarLimpador() {
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo {

    public function darGrau() {
        echo "Empinando em 321";
    }

}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Preto";
$carro->ano = 2020;
$carro->Acelerar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Xre";
$moto->cor = "Cinza";
$moto->ano = 2022;
$moto->Freiar();
echo "<br>";
$moto->darGrau();
var_dump($moto);


?>


