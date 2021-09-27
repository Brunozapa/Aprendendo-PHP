<?php

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);

        if(is_int($posicao)){
            unset($array[$posicao]);
        } else{
            echo "Não foi encontrado no array" . PHP_EOL;
        }
    }
}