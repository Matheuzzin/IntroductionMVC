<?php

    $NOME = $_REQUEST['NOME'];
    $ANIMAL = $_REQUEST['ANIMAL'];

    if(empty($NOME)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'
        );
    
    } else {

        switch($ANIMAL){
            case '1' : $dados = array(
                "tipo" => 'cachorro.jpg',
                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o cachorro'
            );
            break;
            case '2' : $dados = array(
                "tipo" => 'gaviao.jpg',
                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o gavião'
            );
            break;
            case '3' : $dados = array(
                "tipo" => 'passarinho.jpg',
                "mensagem" => 'Olá '.$NOME.', sabemos que seu animal preferido é o passarinho'
            );
            break;
        }

    }

    echo json_encode($dados);