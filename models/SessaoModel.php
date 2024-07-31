<?php

namespace models;

class SessaoModel
{
	public function iniciarSessao(){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION["user"])){
            die("Realize o login para acessar essa pagina!");
        }
    }
}