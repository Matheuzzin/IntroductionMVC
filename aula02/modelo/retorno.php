<?php

    $Nome = $_REQUEST['Nome'];
    $Data = $_REQUEST['Data'];
    $Bebida = $_REQUEST['Bebida'];

    $Ano_Atual = date('Y');
    $Ano_Nasc = date("Y", strtotime($Data));

    $idade = $Ano_Atual - $Ano_Nasc;

    if(empty($Nome && $Data && $Bebida)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existem(m) campo(s) obrigatório(s) não preenchido(s).'
        );
    
    } 
    else {
        if($idade >= 18)
            $dados=array(
                "mensagem" => "Olá senhor(a) " .$Nome ."<br> Vimos que sua bebida favorita é " . $Bebida.
                " <br> Sua Idade é: " . $idade . " anos" . ", portanto você é de <b>MAIOR.</b>"
            );

        else{
            $dados=array(
                "mensagem" => "Olá senhor(a) " .$Nome ."<br> Vimos que sua bebida favorita é " . $Bebida .
                " <br> Sua Idade é: " . $idade . " anos" . ", portanto você é de <b>MENOR.</b>"
            );
        }

    }

    echo json_encode($dados);

  
