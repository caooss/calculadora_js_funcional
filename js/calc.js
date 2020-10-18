function botao(num){ //mostrar os números do visor
    var salvar=document.calc.visor.value;
    document.calc.visor.value=salvar+num;
}

function limpar(){
    document.calc.visor.value="";
}

function calcular(){ //calcular usando eval
    var conta=document.calc.visor.value;
    var calculo = eval(conta);
    var resultado=document.calc.visor.value=parseFloat(calculo.toFixed(2));
}
