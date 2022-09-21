<?php
//AULA 1 

    /*class Pessoa {
        public $nome;
        public $idade;

        public function Falar() {
            echo $this->nome." de ".$this->idade." Anos, Acabou de Falar <br>";
        }
    }

    $matheus = new Pessoa();
    $matheus->nome = "Matheus Henrique de Jesus";
    $matheus->idade = 24;
    $matheus->Falar(); */


    //Aula 2

    /*class Login {
        private $email;
        private $senha;
        private $nome;
        public function __construct($email, $senha, $nome) {
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }
        public function setEmail($e) {
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }
        public function getSenha() {
            return $this->senha;
        }
        public function setSenha($s) {
            $this->senha = $s;
        }

        public function Logar() {
            if($this->email == "teste@teste.com" and $this->senha == "123456"):
                echo "Logado com Sucesso!";
            else:
                echo "Dados inválidos";
            endif;
        }
    }

    $logar = new Login("teste@teste.com", "123456", "Matheus de Jesus");
    $logar->setEmail("teste//()@teste.com");
    $logar->setSenha("123456");
    $logar->Logar();
    echo "<br>";
    echo $logar->getNome(); */
    




    //Aula 3 Herança
/*class veiculo {
    protected $modelo;
    public $cor;
    public $ano;

    public function Acelerar(){
        echo "Acelerou <br>";
    }

    public function Freiar() {
        echo "<br><br> Freiou <br>";
    }
    
    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getModelo() {
        return $this->modelo;
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

$carro = new Veiculo();
$carro->setModelo("BMW");
echo $carro->getModelo();

EXEMPLO
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
var_dump($moto); */


//Aula 4  Classes abstratas e métodos abstratos 

/*abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
        $this->saldo = $s;
        echo "<hr> Sacou: ".$s;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class NuBank extends Banco {
    
    public function Sacar($s) {
        $this->saldo = $this->saldo - $s;
        echo "<hr> Sacou: ".$s;
    }
        public function Depositar($d) {
            $this->saldo += $d;
            echo "<hr> Depositou: ".$d;
        }
    
}

$NuBank = new NuBank();
$NuBank->setSaldo(10000);
echo "<hr> Saldo: ".$NuBank->getSaldo();
$NuBank->Sacar(100);
echo "<hr> Saldo: ".$NuBank->getSaldo();
$NuBank->Depositar(500);
echo "<hr> Saldo: ".$NuBank->getSaldo(); */

//Se fosse estanciar
/* $NuBank = new NuBank();
$BB = new BB(); */

//AULA 5  COSNTANTES


/*class Pessoa {
    const nome = "Matheus";

    public function exibirNome() {
        echo self::nome;
    }
}

class Matheus extends Pessoa {
    const nome = "Henrique";

    public function exibirNome() {
        echo parent::nome;
    }
} 



//Se fosse estanciar
$rodrigo = new Matheus();
$rodrigo->exibirNome(); */

// Aula 6 Métodos e atributos estaticos

/*class Login {
    public static $user;

    public static function verificarLogin() {
        echo "O usuario ".self::$user." está logado!!";
    }

    public function sairSistema() {
        echo "O usuário deslogou";
    }
}

$login = new Login();
$login = sairSistema();*/

//Aula 7 Polimorfismo

/*class Animal {
    public function Andar() {
        echo "O animal andou";
    }
}

class Cavalo extends Animal {
    public function Andar() {
        echo "O cavalo Andou";
    }
}

$animal = new Cavalo();
$animal->Andar();*/

// Aula 8 Interfaces

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {

    public function create($data) {
        //Lógica para criar uma noticia
    }

    public function read() {
        //Lógica para ler uma noticia
    }

    public function update() {
        //Lógica para atualizar uma noticia
    }

    public function delete() {
        //Lógica para deletar uma noticia
    }
}
?>


