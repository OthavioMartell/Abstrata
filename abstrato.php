<?php

    abstract class Usuario{
        
        protected $nomeUsuario;

        abstract public function declararSeuPapel();

        public function setNomeUsuario($nome){
            $this -> nomeUsuario = $nome;
        }

        public function getNomeUsuario(){
            return $this -> nomeUsuario;
        }

    }

    class Admin extends Usuario{
        public function declararSeuPapel(){
            return "admin"; 
        }
    }

    $admin1 = new Admin();
    $admin1 -> setNomeUsuario("Mefistófeles");