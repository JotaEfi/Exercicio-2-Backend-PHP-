<?php

  // $lista = array(5, 2, 3, 4, 1);
  // $size = var_dump(count($lista));
  // print_r($lista);
  // for ($i = 0; $i < $size; $i++){
  //   for ($j = 0; $j < $size - $i  - 1; $j++){
  //     if ($lista[$j]>$lista[$j+1]){
  //       $aux = $lista[$j];
  //       $lista[$j] = $lista[$j+1];
        
  //       $lista[$j+1] = $aux;
  //     }
  //     print_r($lista[$j]);
  //   }
   
  // }




//   class Salgado{

//     public $tipo;
//     public $gosto;
//     public $preco;
    
//     public function meuSalgado(){
//       echo "O meu salgado é $this->tipo, e tem gosto $this->gosto, pelo valor de $this->preco.";
//     }
  
//   }
// $salgado = new Salgado;

// $salgado -> tipo = "Rapadura";
// $salgado -> gosto = "mei rui";
// $salgado -> preco = "20 conto";
// $salgado -> meuSalgado();

// class Evento{
//   public $nome;
//   public $data;
//   public $vagas;
//   public $tema;
//   public $descricao;
//   public $local;
  
//   public function meuEvento(){
//   }
  
//   public function iscaição(){  
//   }
  
//   public function vagasRestantes(){  
//   }
// }



// $a = fgets(STDIN);
// $b = fgets(STDIN);
// $c = fgets(STDIN);

// $ab = ($a + $b + abs($a-$b))/2;
//  // echo ("soma = )$ab;
// if($ab > $c){
//   echo "$ab eh maior";
// }else{
//   echo "$c eh maior";
// }




//$maior = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
//echo "$maior eh maior"; 




// for($k = 0; $k < 3; $k++){
//   $var = fgets(STDIN);
//   $arr[3] = array();
//   $arr[$k] = $var; 
// }

// $a = $arr[0];
// $b = $arr[1];
// $c = $arr[2];

// $medA_B = ($a + $b + abs($a-$b))/2;
// $medFIN = ($medA_B + $s + abs($medA_B - $s))/2;
// echo "$medFIN eh o maior";


// $line = fgets(STDIN); 
// for($k = 0; $k < $line; $k++){
//   $text = fgets(STDIN);
//   $chars = strlen($text);
//   $size_string = int($chars);
//   for($t = 0; $t < $size_string; $t++){
//     if($k = 0){
//       $counter = 0;
//       if($text[$counter] > 64 && $text[$counter] < 91){
//         $text[0] = chr(ord($text[0]) + 3);
//       }
//       $counter++;
//     } else if($k = 1){
//       for ($j = 0; $j < $size_string; $j++){
//         $aux = $text[$size_string];
//         $text[$size_string] = $text[$j];
//         $text[$j] = $aux;
//       }
//     }else if($k = 2){
//       $split_chars = int($chars/2);
//       for($l = $split_chart; $l > $chars; $l++){
//         $text[$l] = chr(ord($text[$l]) - 1); 
//       }
//     }
//   }
// }

// class Animal{
// protected $nome;
//   public function getNome(){
//     return $this->nome;
//   }
//   public function falar(){
//     return "O animal vai se comunicar \n";
//   }
// }

// class Cachorro extends Animal{
//   public function falar(){
//     return "AuAuAu \n";
//   }
// }

// class Gato extends Animal{
//   public function falar(){
//     return "MiauMiau \n";
//   }
// }

// $animal1 = new Animal();
// $animal1 -> setNome("Animal desconhecido");
// echo $animal1 -> falar();

// $cachorro1= new Cachorro();
// $cachorro1 -> setNome("Lua");
// echo $cachorro1 -> falar();
// $gato1 = new Gato();
// $gato1-> setNome("Mia");
// echo $gato1 -> falar();



// class Funcionario {
//   $nome;
//   $salario;

//   public function setNome(){
//     return $this->nome;
//   }
//   public function setSalario($salario){
//     return $this->salario;
//     class Gerente(){
//       $num;
//       public function getNum(){
//         return $this->(;
//       }
//     }
//         public function getSal($num){
//           return $this->salario+($num*0.95);;
//         }
//       }
//     }
//   }
// }

// class Funcionario {
//   protected $nome;
//   protected $salario;

//   public function setNome ($nome) {
//     $this->nome = $nome;
//   }

//   public function getNome () {
//     return $this->nome;
//   }

//   public function setSalario ($salario) {
//     $this->salario = $salario;
//     public function Gerente($salario){
      
//     }
//   }

//   public function getSalario () {
//     return $this->salario;
//   }
// }


// $horas[4]{
//   1   => $var = fgets(STDIN);,
//   2   => $var2 = fgets(STDIN);,
//   3    => $var3 = fgets(STDIN);,
//   $h4    => $var4 = fgets(STDIN);,
// }
// echo "$var";


// $lines = intval(fgets(STDIN));
// for ($i = 0; $i < $lines; $i++) {
//     $text = fgets(STDIN);
//     $length = strlen($text);
//     for ($k = 0; $k < 3; $k++) {
//         if ($i == 0) {
//             for ($j = 0; $j < $length; $j++) {
//                 $aux = $text[$j];
//                 $text[$j] = chr(ord($text[$j]) + 3);
//                 $asciiValue = ord($text[$j]);
//                 $asciiValueAdd = $asciiValue + 3;
//                 $text[$j] = ord($asciiValueAdd);
//             }
//         }
//     }
// }

// $lines = intval(fgets(STDIN));
// for ($i = 0; $i < $lines; $i++) {
//     $text = fgets(STDIN);
//     $length = strlen($text);
//     $textcopy = $text;
//     for ($k = 0; $k < 3; $k++) {
//         if ($i == 0) {
//             for ($j = 0; $j < $length; $j++) {
//                 if (ord($text[$j]) > 64 && ord($text[$j]) < 91) {
//                     $text[$j] = chr(ord($text[$j]) + 3);
//                 }
//             }
//         }
//       echo 
//     }
// }


// $lines = intval(fgets(STDIN));
// for ($i = 0; $i < $lines; $i++) {
//     $text = fgets(STDIN);
//     for ($t = 0; $t < $lines; $t++) {
//         $text_array[$t] = $text;     
//     }
//     $length = strlen($text_array[$i]);
//     $textcopy = $text_array[$i];
//     for ($k = 0; $k < 3; $k++) {
//         if ($i == 0) {
//             for ($j = 0; $j < $length; $j++) {
//                 if (ord($text_array[$text[j]]]]) > 64 && ord($text_array[$j]) < 91) {
//                     $textcopy[$j] = chr(ord($text_arrayt[$j]) + 3);
//                 }
//             }
//         }
//     }
//     echo $textcopy;
// }





// echo "Quantas linhas de strings você deseja? ";
// $lines = intval(fgets(STDIN));
// $text_array = [];
//   //faz um loop para gerar a quantidade de linha de entrada
//     for ($t = 0; $t < $lines; $t++) {   //de fato pede as linhas na quantidade que foi colocado de entrada
//         $text = fgets(STDIN);   //faz o input do texto de cada linha que é repetido no loop acima
//         $text_array[$t] = $text;    //cria um array para armazenar as strings
//     }
//     for ($s = 0; $s < $lines; $s++) {   //roda para acessar as strings que tem no array
//         $each_string_array = $text_array[$s];  //armazena o texto de uma das strings do array da vez 
//         $string_length = strlen($each_string_array);   //define a quantidade de caracteres que tem na string da vez
//         for ($k = 0; $k < 3; $k++) {    //loop para aplicar as 3 regras que a questao pede
//             if ($k == 0) {  //entra na primeira regra
//                 for ($each_letter = 0; $each_letter < $string_length; $each_letter++) {  //loop para passar por todas as letras da string da vez
//                     if (ord($each_string_array[$each_letter]) > 64 && ord($each_string_array[$each_letter]) < 91) {
//                       $aux = $each_string_array[$each_letter];
//                       $each_string_array[$each_letter] = chr(ord($aux[$each_letter]) + 3);
//                     }
//                 }
//                          }
//             //  else if($i ==1){
              
//             // } else if($i ==2){
              
//             // }
//         }
//         echo $each_string_array;;
//     }





// $lines = intval(fgets(STDIN));
// $text_array = array();
// for ($i = 0; $i < $lines; $i++) {   //faz um loop para gerar a quantidade de linha de entrada
//     for ($t = 0; $t < $lines; $t++) {   //de fato pede as linhas na quantidade que foi colocado de entrada
//         $text = strval(fgets(STDIN));   //faz o input do texto de cada linha que é repetido no loop acima
//         $text_array[$t] = $text;    //cria um array para armazenar as strings
//     }
//     for ($s = 0; $s < $lines; $s++) {   //roda para acessar as strings que tem no array
//         $length = $text_array[$s];  //armazena o texto de uma das strings do array da vez 
//         $string_length = strlen($length);   //define a quantidade de caracteres que tem na string da vez
//         $textcopy = $length;
//         for ($k = 0; $k < 3; $k++) {    //loop para aplicar as 3 regras que a questao pede
//             if ($i == 0) {  //entra na primeira regra
//                 for ($j = 0; $j < $string_length; $j++) {  //loop para passar por todas as letras da string da vez
//                     if (ord($length[$j]) > 64 && ord($length[$j]) < 91) {
//                         $textcopy[$j] = chr(ord($text_arrayt[$j]) + 3);
//                     }
//                 }
//             }
//         }
//         echo $textcopy;
//     }

// }
// function varStarts(){
//   echo "Quantas linhas de string você deseja? "
//   $line = fgets(STDIN); 
//   $chars = str_split($text);
//   return $chars, $line;
// }

// for($k = 0; $k < $line; $k++){
//   $text = fgets(STDIN);
// }
// for($case = 0; $case < 3; $case++){
  
//   if($case == 0){
    
//   }
//   else if($case==1){
//   } 
//   else if($case == 2){  
//   }
// }


// abstract class Conta {
//   protected $saldo;

//   abstract public function sacar($valor);
  
//   abstract public function depositar($valor);

//   abstract public function verSaldo();    
// }

// class ContaCorrente extends Conta{
// public function sacar($valor){
//   $this -> saldo -= $valor;
//   echo "Meu saldo atual é ".$this->verSaldo()."\n";
// }

//  public function depositar($valor){
//    $this -> saldo += $valor;
//    echo "Meu saldo atual é ".$this->verSaldo()."\n";
//  }

//  public function verSaldo(){
//    return $this->saldo;
// }
// }
// $cc = new ContaCorrente();
// $cc -> depositar(10);
// $cc -> sacar(15);
// $cc -> depositar(20);



abstract class Filme {
  public $nome_filme;
  public $genero;
  public $classificacao;
  public $sessao;
  public $duracao;

  public function __construct($nome_filme, $genero, $classificacao, $sessao, $duracao){
    $this->nome_filme = $nome_filme;
    $this->genero = $genero;
    $this->classificacao = $classificacao;
    $this->sessao = $sessao;
    $this->duracao = $duracao;
  }

  public function getNome_filme(){
    return $this->nome_filme;
  }

  public function getGenero(){
    return $this->genero;
  }

  public function getClassificacao(){
    return $this->classificacao;
  }

  public function getSessao(){
    return $this->sessao;
  }

  public function getDuracao(){
    return $this->duracao;
  }
}


class Ingresso extends Filme{
  private $sala;
  private $preco;

  public function __construct($filme, $sala, $preco){
    $this->nome_filme = $filme;
    $this->sala = $sala;
    $this->preco = $preco;
  }
  public function getFilme(){
  return $this->nome_filme;
  }
  public function getSala(){
  return $this->sala;
  }
  public function getPreco(){
  return $this->preco;
  }


}

class Cliente {
  private $nome_cliente;
  private $idade;
  private $email;

  //insere nome do cliente
  public function setNome($nome){
    $this->nome_cliente = $nome;
  }
  //retorna o nome inserido
  public function getNome(){
    return $this->nome_cliente;
  }

  //insere idade
  public function setIdade($idade){
    $this->idade = $idade;
    if($idade < 18){
      echo "Você não pode comprar ingresso. \n";
    }else{
      echo "Você pode comprar ingresso. \n";
    }
  }
  //retorna a idade inserido
  public function getIdade(){
    return $this->idade;
  }


  //insere email
  public function setEmail($email){
    $this->email = $email;
  }
  //retorna o email inserido
  public function getEmail(){
    return $this->email;
  }
}



class Sala extends Filme{
  private $numero;
  private $assentos;

  public function __construct($numero, $assentos){
    $this->numero = $numero;
    $this->assentos = $assentos;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function getAssentos(){
    return $this->assentos;
  }
}

//pra rodar tem que ir no main

$filme1 = new Ingresso("Duna 2", 150, 10);
$sala1 = new Sala(1, 100);
$ingresso1 = new Ingresso($filme1, $sala1, 10);
$cliente1 = new Cliente("Maria", 25);

echo "Cliente: " . $cliente1->getNome() . "\n";
echo "Filme: " . $ingresso1->getFilme()->getnome_filme() . "\n";
echo "Sala: " . $ingresso1->getSala()->getNumero() . "\n";
echo "Preço do Ingresso: $" . $ingresso1->getPreco() . "\n";

?>
















