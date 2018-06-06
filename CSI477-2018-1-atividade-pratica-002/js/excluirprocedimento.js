//aguardar que o documento esteja completo - fully loaded
$(document).ready(function(){
    console.log("Documento excluirprocedimento.js carregado");
    //carrega automático
    $("input[name='id']").focusout(function(){
      //valida - Nome/Login
      if(!$("input[name='id']").val()){
        $("#alertaID").show();
        //Adiciona a classe CSS de erro
        //$("#Amp").addClass("has-error");
        //Limpa campo
        $("input[name = 'id']").val("");
        //Define o foco para o campo
        $("input[name = 'id']").focus();
        return;
      }
      //valor 1 correto
      //Remover a classe de erro
        $("#id").removeClass("has-error");
        //Ocultar o alerta - mensagem
        $("#alertaID").hide();

    });
});
