var acertos = 0;
$(function(){
  $('input[name="optradio"').click(function(){
    if ($(opc2).is(':checked'))
    {
      $("#sucesso1").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou1').show();
      $('input[name=optradio]').attr("disabled",true);
    }
  });

  $('input[name="optradio2"').click(function(){
    if ($(opc3).is(':checked'))
    {
      $("#sucesso2").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio2]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou2').show();
      $('input[name=optradio]').attr("disabled",true);
    }
  });

  $('input[name="optradio3"').click(function(){
    if ($(opc4).is(':checked'))
    {
      $("#sucesso3").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio3]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou3').show();
      $('input[name=optradio]').attr("disabled",true);
    }
  });

  $('input[name="optradio4"').click(function(){
    if ($(opc4).is(':checked'))
    {
      $("#sucesso4").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio4]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou4').show();
      $('input[name=optradio4]').attr("disabled",true);
    }
  });

  $('input[name="optradio5"').click(function(){
    if ($(opc2).is(':checked'))
    {
      $("#sucesso5").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio5]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou5').show();
      $('input[name=optradio5]').attr("disabled",true);
    }
  });

  $('input[name="optradio6"').click(function(){
    if ($(opc3).is(':checked'))
    {
      $("#sucesso6").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio6]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou6').show();
      $('input[name=optradio6]').attr("disabled",true);
    }
  });
  $('input[name="optradio7"').click(function(){
    if ($(opc4).is(':checked'))
    {
      $("#sucesso7").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio7]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou6').show();
      $('input[name=optradio7]').attr("disabled",true);
    }
  });

  $('input[name="optradio8"').click(function(){
    if ($(opc1).is(':checked'))
    {
      $("#sucesso8").show();
      //$(this).prop('checked', false); desmarca opção
      $('input[name=optradio8]').attr("disabled",true);
      acertos = acertos + 1;
      //alert("Quantidade de acertos: "+acertos); alerta
      //alert($(this).val()); mostra alerta na tela
    }else{
      $('#errou6').show();
      $('input[name=optradio8]').attr("disabled",true);
    }
  });

  $("button[name = 'avaliar']").click(function(){
    alert("Quantidade de acertos: "+acertos+" de 8");

  });

});
