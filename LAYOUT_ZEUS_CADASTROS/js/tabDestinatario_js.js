
function salvarDestinatario(){
        var frmDestinatario = $("#frmDestinatario").serializeArray();
        frmDestinatario.push({ name: "nfe_id", value: nfe_id });

        $.ajax({
                url: base_url + "notafiscal/salvarDestinatario",
                type: "post",
                dataType:"Json",
                data:frmDestinatario,
                success: function(data){
                    fecharGiraGira();
                    if(data.tem_erro ==true){
                        $("#mostrarUmErro").html(MostrarUmaMsgErro(" Erro: " + data.erro));
                    }else{
                        $("#mostrarSucesso").html(MostrarUmaMsgSucesso("Sucesso : " + "Dados da Aba Destinatario atualizado com sucesso"));
                    }
                },
                beforeSend: function(){
                giraGira();
            }, error: function (e) {
                fecharModal();
                var response = JSON.parse(e.responseText);
                $("#mostrarErros").html(MostrarMsgErros(response.errors));
            }
        });
}

