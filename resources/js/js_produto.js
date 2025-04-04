function calcularPreco(){
    let preco_custo = converteMoedaFloat( $('#preco_custo').val()) ;
    let margem_lucro = converteMoedaFloat($('#margem_lucro').val());
    let preco_venda = preco_custo + (preco_custo*margem_lucro*0.01);

    $("#preco_venda").val(converteFloatMoeda(preco_venda.toFixed(2)));
}

