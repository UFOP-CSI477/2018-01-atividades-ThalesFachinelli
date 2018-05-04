//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento tratamentoescala.js carregado");
    //carrega automático
    $("input[name='amplitude']").focusout(function(){
      var valor1 = parseInt($("input[name='amplitude']").val());
      //validar - valor1
      if(isNaN(valor1)){
        $("#alertaA").show();
        //Adiciona a classe CSS de erro
        $("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'amplitude']").val("");
        //Define o foco para o campo
        $("input[name = 'amplitude']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#Amp").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaA").hide();

    });

    $("input[name='intervalo']").focusout(function(){
      var valor2 = parseInt($("input[name='intervalo']").val());
      //validar valor2
      if(isNaN(valor2)){
        $("#alertaT").show();
        //Adiciona a classe CSS de erro
        $("#Int").addClass("has-error");
        //Limpa campo
        $("input[name = 'intervalo']").val("");
        //Define o foco para o campo
        $("input[name = 'intervalo']").focus();
        return;
      }
      //valor 2 correto
      //Remover a classe de erro
        $("#Int").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaT").hide();

    });

  $("button[name = 'calculo']").click(function(){

    var valor1 = parseInt($("input[name='amplitude']").val());
    var valor2 = parseInt($("input[name='intervalo']").val());

        var res = (Math.log10(valor1)+(3*(Math.log10(8*valor2))))-2.92;
        //mostrar resultado
        $("input[name='resultado']").val(res);
        if (res<3.5) {
          alert("Terremoto de magnitude baixíssima, não pode ser sentido."+" Magnitude: "+res);
        }else if(res>3.4 && res<5.5){
          alert("Baixa Magnitude, terremoto pode ser sentido mas raramente causa danos."+" Magnitude: "+res);
        }else if(res>5.4 && res<6.1){
          alert("Baixa Magnitude, mas pode causar poucos danos a predios bem construídos e grandes danos a prédios mal construídos"+" Magnitude: "+res);
        }else if(res>6.0 && res<6.9){
          alert("Magnitude Média, destrutivo em um raio de até 100km do epicentro."+" Magnitude: "+res);
        }else if(res>6.9 && res<8.0){
          alert("Grande Terremoto, causa grandes danos em grandes faixas."+" Magnitude: "+res);
        }else if(res>7.9){
          alert("Enorme terremoto, grandes danos mesmo a grandes distâncias."+" Magnitude: "+res);
        }
  });

});
