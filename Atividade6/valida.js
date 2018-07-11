//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento validar.js carregado");
    //carrega automático
    $("input[name='nome']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='nome']").val()){
        $("#alertaNome").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'nome']").val("");
        //Define o foco para o campo
        $("input[name = 'nome']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#nome").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaNome").hide();

    });

    $("input[name='telefone']").focusout(function(){
      //validar email
      if(!$("input[name='telefone']").val()){
        $("#alertaTelefone").show();
        //Adiciona a classe CSS de erro
        $("#telefone").addClass("has-error");
        //Limpa campo
        $("input[name = 'telefone']").val("");
        //Define o foco para o campo
        $("input[name = 'telefone']").focus();
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
        $("#telefone").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaTelefone").hide();
        //$("#alertaEmail2").hide();

    });
    $("input[name='cpf']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='cpf']").val()){
        $("#alertaCpf").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'cpf']").val("");
        //Define o foco para o campo
        $("input[name = 'cpf']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#cpf").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaCpf").hide();

    });
    $("input[name='endereco']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='endereco']").val()){
        $("#alertaEnd").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'endereco']").val("");
        //Define o foco para o campo
        $("input[name = 'endereco']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#endereco").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaEnd").hide();

    });
    $("input[name='cep']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='cep']").val()){
        $("#alertaCep").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'cep']").val("");
        //Define o foco para o campo
        $("input[name = 'cep']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#cep").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaCep").hide();

    });


});
