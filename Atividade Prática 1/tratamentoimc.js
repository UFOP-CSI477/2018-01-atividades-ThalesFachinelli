//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento tratamentoescala.js carregado");
    //carrega automático
    $("input[name='peso']").focusout(function(){
      var valor1 = parseFloat($("input[name='peso']").val());
      //validar - valor1
      if(isNaN(valor1)){
        $("#alertaP").show();
        //Adiciona a classe CSS de erro
        $("#Pes").addClass("has-error");
        //Limpa campo
        $("input[name = 'peso']").val("");
        //Define o foco para o campo
        $("input[name = 'peso']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#Pes").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaP").hide();

    });

    $("input[name='altura']").focusout(function(){
      var valor2 = parseFloat($("input[name='altura']").val());
      //validar valor2
      if(isNaN(valor2)){
        $("#alertaA").show();
        //Adiciona a classe CSS de erro
        $("#Alt").addClass("has-error");
        //Limpa campo
        $("input[name = 'altura']").val("");
        //Define o foco para o campo
        $("input[name = 'altura']").focus();
        return;
      }
      //valor 2 correto
      //Remover a classe de erro
        $("#Alt").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaA").hide();

    });

  $("button[name = 'calculo']").click(function(){

    var valor1 = parseFloat($("input[name='peso']").val());
    var valor2 = parseFloat($("input[name='altura']").val());
    var ideal1;
    var ideal2;
    ideal1= ((Math.pow(valor2,2))*18.5);
    ideal2= ((Math.pow(valor2,2))*24.9);

        var res = (valor1/(Math.pow(valor2,2)));
        //mostrar resultado
        $("input[name='resultado']").val(res);
        if (res<18.5) {
          alert("Subnutrição"+" IMC: "+res + " Peso ideal está entre: "+ ideal1+" Kg"+" e "+ideal2+" Kg");
        }else if(res>18.4 && res<25.0){
          alert("Peso Saudável"+" IMC: "+res);
        }else if(res>24.9 && res<30.0){
          alert("Sobrepeso"+" IMC: "+res+" Peso Ideal está entre "+ideal1+" Kg"+" e "+ideal2+" Kg");
        }else if(res>29.9 && res<35.0){
          alert("Obesidade Grau 1."+" IMC: "+res+" Peso Ideal está entre "+ideal1+" Kg"+" e "+ideal2+" Kg");
        }else if(res>34.9 && res<40.0){
          alert("Obesidade Grau 2."+" IMC: "+res+" Peso Ideal está entre "+ideal1+" Kg"+" e "+ideal2+" Kg");
        }else if(res>39.9){
          alert("Obesidade Grau 3."+" IMC: "+res+" Peso Ideal está entre "+ideal1+" Kg"+" e "+ideal2+" Kg");
        }
  });

});
