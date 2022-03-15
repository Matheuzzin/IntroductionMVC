$(document).ready(function(){

    // Monitorar o clique em cima do botão btn-send
    $('.btn-send').click(function(e){
        e.preventDefault()

        // Coletar as informações digitadas/selecionadas no formulário
        let dados = $('#form').serialize()

        $('#retorno').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(dados){
                $('#retorno').append(`           
                    <div class="col-12 col-sm-8 col-md-6">
                        <div class="alert-danger">
                            <h1 class="text-dark text-left">
                                ${dados.mensagem}
                            </h1>
                        </div>
                    </div>
                `)
            }
        })
    })

})