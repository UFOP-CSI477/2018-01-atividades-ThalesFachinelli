//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento tratamentocadastro.js carregado");
  function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
  return emailReg.test( $email );
}
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

    $("input[name='email']").focusout(function(){
      //validar email
      if(!$("input[name='email']").val()){
        $("#alertaEmail").show();
        //Adiciona a classe CSS de erro
        $("#email").addClass("has-error");
        //Limpa campo
        $("input[name = 'email']").val("");
        //Define o foco para o campo
        $("input[name = 'email']").focus();
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
        $("#email").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaEmail").hide();
        //$("#alertaEmail2").hide();

    });
    $("input[name='senha']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='senha']").val()){
        $("#alertaSenha").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'senha']").val("");
        //Define o foco para o campo
        $("input[name = 'senha']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#senha").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaSenha").hide();

    });



});
