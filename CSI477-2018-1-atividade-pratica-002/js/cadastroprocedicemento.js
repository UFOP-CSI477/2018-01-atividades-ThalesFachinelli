//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento cadastroprocedimento.js carregado");
    //carrega automático
    $("input[name='login']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='login']").val()){
        $("#alertaLogin").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'login']").val("");
        //Define o foco para o campo
        $("input[name = 'login']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#login").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaLogin").hide();

    });

    $("input[name='id']").focusout(function(){
      //validar email
      if(!$("input[name='id']").val()){
        $("#alertaID").show();
        //Adiciona a classe CSS de erro
        $("#id").addClass("has-error");
        //Limpa campo
        $("input[name = 'id']").val("");
        //Define o foco para o campo
        $("input[name = 'id']").focus();
        return;
      }
      //if( !validateEmail($("input[name='email']"))){
        //$("#alertaEmail2").show();
        //Adiciona a classe CSS de erro
        //$("#email").addClass("has-error");
        //Limpa campo
        //$("input[name = 'email']").val("");
        //Define o foco para o campo
        //$("input[name = 'email']").focus();
        //return;
      //}
      //valor 2 correto
      //Remover a classe de erro
        $("#id").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaID").hide();
        //$("#alertaEmail2").hide();

    });
    $("input[name='valor']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='valor']").val()){
        $("#alertaValor").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'valor']").val("");
        //Define o foco para o campo
        $("input[name = 'valor']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#valor").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaValor").hide();

    });



});
