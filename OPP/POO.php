<?php

    class Pessoa{
      
      public $nome;
      public $idade;
      
      public function apresentar(){
        echo "Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.";
        echo"\n";
      }
    }
    
    class Aluno extends Pessoa {
      
      public $matricula;
      
      public function estudar(){
        echo "O aluno está estudando.";
        echo"\n";
        echo"\n";
      }
    }
    
    class Professor extends Pessoa{
      
      public $disciplina;
      
      public function ensinar(){
        echo "O professor " . $this->nome . " está ensinando a disciplina de " . $this->disciplina . ".";
      }
    }
    
    //aluno
    
    $aluno1 = new Aluno();
    $aluno1->nome = "Carlos";
    $aluno1->idade = 12;
    
    $aluno1->apresentar();
    $aluno1->estudar();
    
    //professor
    
    $professor1 = new Professor();
    $professor1->nome = "Leonardo";
    $professor1->disciplina = "Linguagem Orientada a Objetos";
    
    $professor1->ensinar();
?>