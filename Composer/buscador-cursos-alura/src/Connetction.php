<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\Exception\ClientException;

class Connection
{
    const HOST = '127.0.0.1';
    const USER = 'root';
    const SENHA = 'Laz260165';
    const DB = 'login';

    public function __construct()
    {
        $this->setConection();
    }

    private function setConection()
    {
        new mysqli(self::HOST, self::USER, self::SENHA, self::DB);

        try{
            echo '12';
        } catch(Exception $e){

        }
    }
}
